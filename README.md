# miliband

> Wordpress Theme for The Social Review

## Site

The site is powered by [sail](https://sailed.io/), a tool that supports the CLI for Wordpress. It is tesed locally through [local-wp](https://localwp.com/).

## Theme

The theme is powered by [lit.dev](https://lit.dev), a web components library that handles tree shaking and the web app. This is then bundled through [rollup](https://rollupjs.org/guide/en/) and made backwards compatible through [babel](https://babeljs.io/). This premise was inspired by [Hasani Rogers](http://blog.hasanirogers.me/2020/09/web-app-with-wordpress-and-litelement.html)'s blog post.

```bash
gh repo clone https://github.com/JacobWeinbren/miliband.git
cd miliband
yarn install

#For Development
yarn dev

#For deployment
yarn build
```

## License

-   Miliband uses the MIT License, [summarised here](https://tldrlegal.com/license/mit-license).
-   [Bootstrap icons](https://icons.getbootstrap.com/) uses the MIT License
-   The font [Poppins](https://fonts.google.com/specimen/Poppins) is licensed under the [Open Font License](https://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL).
