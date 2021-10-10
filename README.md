# miliband

> Wordpress Theme for The Social Review

## Site

The site is powered by [sail](https://sailed.io/), a tool that covers the main CLI commands for Wordpress. It can be deployed through

```bash
gh repo clone https://github.com/JacobWeinbren/miliband.git
cd miliband
yarn install
yarn build
yarn deploy
```

## Theme

The theme is powered by [lit.dev](htts://lit.dev), a web components library that handles tree shaking and the web app. This is then bundled through [rollup](https://rollupjs.org/guide/en/) and made backwards compatible through [babel](https://babeljs.io/).

```bash
#For Development
yarn dev

#For deployment
yarn build
```

## License

-   Miliband uses the MIT License, [summarised here](https://tldrlegal.com/license/mit-license).
-   The font [Poppins](https://fonts.google.com/specimen/Poppins) is licensed under the [Open Font License](https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL).
