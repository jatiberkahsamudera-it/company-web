# Company profile website starter

A lightweight native PHP starter for single-page company profile websites. The public web root is `public/`; application code, configuration, and secrets stay outside it.

## Requirements and local development

- PHP 8.1 or later
- A web server configured with `public/` as its document root
- No runtime PHP package dependencies

For local development:

```sh
php -S 127.0.0.1:8080 -t public
```

Copy `.env.example` to `.env` and set the mail values before enabling the contact form. Keep `.env` private and never commit it.

## Customize a client site

1. Edit `config/site.php` for company details, section copy, service entries, navigation, and section order.
2. Change the six theme colors in `config/site.php` to rebrand the site.
3. Add images under `public/assets/images/` and update the matching image paths in the content config. Images use fixed-ratio frames with `object-fit: cover`.
4. Configure `CONTACT_RECIPIENT` and `MAIL_FROM` in `.env` for contact-form delivery. `PUBLIC_CONTACT_EMAIL` optionally overrides the public email shown on the page.

Each section entry in `config/site.php` selects one reusable component. Remove an entry to omit a section, or reorder entries to change the page layout. Navigation links associated with a section are automatically limited to enabled sections; navigation items without a `section` key remain available for page routes. Service cards are configured as a list, so add or remove items without editing the component markup.

## Components and shared layout

- `components/layout/` contains the reusable shared header and footer.
- Available sections include Hero A/B, Services A/B, Gallery A, Testimonials A, CTA A, About A, and Contact Form. Each lives in its matching folder under `components/`.
- `public/index.php` maps supported component names to their PHP files. Add new sections under `components/` and register their names there before using them in `config/site.php`.
- `public/assets/css/style.css` contains shared styling and responsive layouts.

Keep client copy, branding, contact details, social links, colors, navigation, and section selection in `config/site.php`. Keep shared behavior and markup in `components/` and `app/`. This separation makes template updates easier to merge into client projects.

The starter includes English and Indonesian sample content. Edit both language entries in `config/site.php` when maintaining a bilingual client site, or remove the language switch and unused language content for a single-language site.

To build a page-specific route later, create a PHP file under `public/`, load `config/bootstrap.php`, include `components/layout/header.php`, compose the section components you need, and finish with `components/layout/footer.php`.

## Reuse the template with Git upstream

Create a client repository from the template repository, then set the remotes:

```sh
git clone https://github.com/your-org/company-profile-template.git client-site
cd client-site
git remote rename origin upstream
git remote add origin https://github.com/your-org/client-site.git
git push -u origin main
```

Pull future shared improvements into a client project with:

```sh
git fetch upstream
git merge upstream/main
```

Commit client content and assets normally. Avoid editing shared components for client-only changes where possible; use the client configuration and section composition first to reduce merge conflicts.
