# Elaborate-code

This website/template is powered with **Jigsaw**, **Tailwind3** and **Alpine3**.

## Jigsaw setup

```text
mkdir jigsaw &&
cd .\jigsaw\
```

```text
composer require tightenco/jigsaw
```

```text
vendor/bin/jigsaw init
```

```text
npm i &&
npm run prod
```

Preview:

```text
vendor/bin/jigsaw serve production
```

Or

```text
npm i &&
npm run dev &&
vendor/bin/jigsaw serve
```

### Using Tailwind 3

```text
npm install -D tailwindcss@latest postcss@latest autoprefixer@latest
```

```js
module.exports = {
    content: [
        // ...
    ],
    // ...
};
```

### The npm run mix infinit loop issue [ref1](https://github.com/laravel-mix/laravel-mix/issues/1942) [ref2](https://github.com/tighten/jigsaw/issues/607)

*I don't understand the issue neither the solution! But this fixes it.*

```text
npm i fast-glob
```

```js
module.exports = {
    content: require("fast-glob").sync([
        // ..
    ]),
    // ...
};
```

### browser-sync

```text
npm install -g browser-sync
```

```text
npm run watch
```

Now live preview the website on `http://localhost:3000`

### Deploy on github pages [ref](https://jigsaw.tighten.com/docs/deploying-your-site/#:~:text=deploy%20and%20host.-,Using%20GitHub%20Pages,-GitHub%20Pages%20is)

> Commit the `build_production` folder to your repository.
>
> Use `git subtree push` to push just the `build_production` folder to your **`gh-pages`** branch

```text
git subtree push --prefix build_production origin gh-pages
```
