# Frontend

## Framework

Use Tailwindcss

## Responsiveness

For front-end, the application must be responsive. Reaching a specific window width, the menu should be replaced by a *hamburger menu*. When clicking, the menu should slide from top until all options is showed. The hamburger tuns to a "x". The general content must be blurred. The responsive menu is fixed on the top.

## Dark and Light mode

The `View::composer` is used to add data to all views for a implementation of `App\TemplateModels\BaseInterface`. The object is responsible to inject into views some Tailwind styles styles. The views should use the methods from this implementation where it is needed to apply classes that will set the dark or light schema.
