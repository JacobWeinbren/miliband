//SYS
import resolve from "@rollup/plugin-node-resolve";
import copy from "rollup-plugin-copy";
import execute from "rollup-plugin-execute";

//CSS
import postcss from "rollup-plugin-postcss";
import autoprefixer from "autoprefixer";

//JS
import babel from "@rollup/plugin-babel";
import esbuild from "rollup-plugin-esbuild";
import { terser } from "rollup-plugin-terser";

//Production Test
const production = !process.env.ROLLUP_WATCH;

export default [
	{
		input: ["src/app.ts", "src/styles/theme.scss"],
		output: {
			dir: "dist",
			format: "esm",
			sourcemap: true,
		},
		plugins: [
			//Backwards compatibility
			babel({
				babelHelpers: "bundled",
				exclude: "node_modules/**",
			}),
			//Main functions
			postcss({
				plugins: [autoprefixer],
				extract: "theme.css",
				minimize: production,
			}),
			copy({
				targets: [{ src: "src/styles/fonts", dest: "dist" }],
			}),
			resolve(),
			esbuild({ ts: true }),
			production && terser(),
			execute("rm dist/theme.js dist/theme.js.map"),
		],
	},
];
