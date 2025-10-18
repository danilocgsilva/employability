# Frontend

## Framework

Use Tailwindcss

## Responsiveness

For front-end, the application must be responsive. Reaching a specific window width, the menu should be replaced by a *hamburger menu*. When clicking, the menu should slide from top until all options is showed. The hamburger tuns to a "x". The general content must be blurred. The responsive menu is fixed on the top.

## Dark and Light mode

The `View::composer` is used to add data to all views for a implementation of `App\TemplateModels\BaseInterface`. The object is responsible to inject into views some Tailwind styles styles. The views should use the methods from this implementation where it is needed to apply classes that will set the dark or light schema.

## Look and feel

It is based on the Github project `https://github.com/danilocgsilva/tailwind_ai_template_catalog`. Look to the `login_form_professional_look_and_feel` folder, and look to the `template7` and `template7_light`. If there is some doubt about the general design and look for new documents in the project, just look to this project to check how other components are styled.
