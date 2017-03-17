# ClearStep

A web app to help you organizing your & your client/provider tasks, and more. Made with [CakePHP 3](https://github.com/cakephp/cakephp).

- Both for professional & personal tasks, as a TO DO list.
- Set deadlines, tags & comments for your pending tasks using tickets.
- Log your working/whatever sessions and link them with your tickets (or just keep them standalone).
- Get app & email alerts when something happens (new ticket, changed ticket, deadline approaching, overtime dedicated to a project, etc).

Great to be installed as an extranet. 

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project rogerpro/ClearStep ClearStep`.

If Composer is installed globally, run

```bash
composer create-project rogerpro/ClearStep
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project rogerpro/ClearStep myapp
```

You should now be able to visit the path to where you installed the app and see the home page.

## Configuration

You need a SQL database and a LAMP (or similar) installation to run the app. Check the [CakePHP Cookbook](https://book.cakephp.org/3.0/en/installation.html#requirements) to know the exact requirements.

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Update

To update the application, just run, from the app root:

```bash
composer update
```

## Layout

The app uses a subset of [Foundation](http://foundation.zurb.com/) CSS framework by default. You can, however, replace it with any other library or custom styles.

## What's done *(try it now!)*

- Log of working sessions, registering:
  - When did they start
  - When did they ended
  - Total duration
  - Project
  - Related ticket
  - Task description
- Management of:
  - Clients
  - Projects
  - Sessions
- Summaries:
  - Today's detail
  - Today's summary
  - Today's total
- Multiclient
- Multiproject
- i18n (Internationalization) ready (current literals in English)

## What's coming *(TO DO list)*

- Management of:
  - Tickets
  - Users
  - Budgets
  - Fiscal data
  - Invoices
  - Financial transactions
- Summaries & statistics *(big data)*:
  - Average & total time
    - per client
    - per project
  - Most productive
    - working hours
    - working days
  - Average ticket resolution time
- Automatic email sending
- Alerts:
  - Expected time reached per client, project, etc.
  - Maximum client credit reached
  - Discontinued project
- Invoice generation (PDF)
- Multiuser
- Multicountry
- Multicurrency
- L10n (localization)
- Export tickets with deadline to calendar app formats (Google, Apple, Outlook, etc)

## Contributing

Feel free to share what would you like ClearStep to do with an [issue](https://github.com/rogerpro/ClearStep/issues) or directly with a [PR](https://github.com/rogerpro/ClearStep/pulls). You can also write me directly via [email](mailto:git@roger.pro).

## License

Copyright 2017 Roger Campanera. All rights reserved.

Licensed under the [MIT](http://www.opensource.org/licenses/mit-license.php) License. Redistributions of the source code included in this repository must retain the copyright notice found in each file.

## Disclaimer

Because this app is still on their first days of live *(not even in version 1.0)*, the content of this README file may require some fixing. Thanks for your comprehension.
