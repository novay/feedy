# Feedy | Feedback Platform for your Website
Feedy offers a wide range of tools to help you run an effective feedback campaign, within seconds.

#### Table of contents
- [About](#about)
- [Features](#features)
- [Requirements](#requirements)
- [Usage Dependencies](#usage-dependencies)
- [Installation](#installation)
- [Editor](#editor)
- [Integrations](#integrations)
- [Privacy](#privacy)
- [Data Managet](#data-manager)
- [License](#license)

### Features
| Feedy Features  |
| :------------ |
|Feedback Editor|
|Privacy Built-in|
|Easy Integration|
|Works on any sites|
|Powerful export tools|
|Open Source (for Learning)|

### Requirements
* [Laravel 5.2, 5.3, 5.4, 5.5, 5.6, 5.7, 5.8, 6, or 7+](https://laravel.com/docs/installation)

### Usage Dependencies
Feedy can work out the box with or without the following roles packages:
* [laravolt/avatar](https://github.com/laravolt/avatar)
* [fruitcake/laravel-cors](https://github.com/fruitcake/laravel-cors)

### Installation
Guide to installing Feedy onto your server.

In order to make installation as easy as possible, Feedy comes included with it's own auto-installer, which will install Feedy in just a few seconds.
Below is just a walk-through of the information you'll need to give the installer in order to install.

1. From your projects root folder in terminal run:



2. Register Package
* Laravel 5.5, 5.6, and 5.7+
Uses package auto discovery feature, no need to edit the `config/app.php` file.

Once you've completed the installer, you'll be taken to the Feedy homepage and you'll be able to sign in to your account with the details you just provided.

### Editor
Guide to understanding the feedback editor.

#### General Settings

##### Feedback Name
This is the name of your feedback. It's only used internally, when you need to identify the feedback.

##### Accent Color
This is the default color that will be used across the feedback. This applies mainly to buttons and icons on the widget embed and standalone page. Any Hex color code is accepted.

#### Configuration

##### Enable Ratings
With this turned on, users are able to send ratings, based on a selection of emojis, along with any additional feedback.

- 😍 Amazing
- 😀 Great
- 😐 OK
- 😞 Bad
- 😡 Angry

##### Email field required
When enabled, users will be required to enter a valid email address in order to submit feedback.

> If privacy mode is enabled, this will have no effect, as email collection is turned off.

##### Position
You have the choice of which side you'd like the Feedy widget to appear on.

- Left - Displayed on left side of page
- Right - Displayed on right side of page

##### Widget type
Feedy gives you the option to change the style of widget that displays on your site.

- Floating - Mini-widget in corner of page
- Sidebar - Show widget as a sidebar
- Fullscreen - Widget is displayed in center of page

### Integrations
Guide to getting set up and using integrations with your site.

##### Widget Embed
Using Feedy's widget embed on your website is the most common method to collecting feedback from your users. It's as simple as adding some Javascript to your site.
You can find your widget embed code in the Integrations section of your feedback. The code provided should look somewhat similar to the example shown below.

> Important: If Feedy is not installed on a server that has https enabled, you won't be able to embed the widget on a site that uses https, due to browser restrictions.

```html
<!-- Start Feedy Widget -->
<script type="text/javascript" src="https://feedy.btekno.id/widget/5b99e2be-b923-11ea-b684-b91dbc2c312b/script"></script>
<!-- End Feedy -->
```

Once you have your embed code copied, you'll want to paste it right before the </body> tag on every page you'd like the widget to display.

> Note: If you'd like to add Feedy to a site that you don't have access to, you can select Send this to my developer, which will auto-generate an email that you can send to the owner/developer.

##### Standalone page

Instead of embedding the Feedy widget on your website, you can also get feedback responses from a standalone URL. This can be useful if you're not specifically looking to get feedback related to your webpage.
You can find your unique feedback URL in the Integrations section of your feedback as well. The URL provided should look somewhat similar to the example shown below.

```
https://feedy.btekno.id/widget/5b99e2be-b923-11ea-b684-b91dbc2c312b
```

### Privacy
Guide to understand Feedy's privacy mode.

In order to keep user-identifiable information private, Feedy includes a privacy mode, which can be configured individually for each feedback.

*What does this do?*

- Email collection it turned off
- IP addresses are not tracked

If you're needing to collect feedback from users and it's not of importance to collect user data, you can turn this setting on in the Privacy section of the feedback manager to keep responses anonymous.

> Important: Any feedback that was collected when privacy mode was enabled will still remain anonymous, even if turned off.

### Data Manager
Guide to getting familiar with with Feedy's data manager.

Feedy gives you the ability to export feedback responses as a `.CSV` file, if you're interested in backing up your data or for use with another platform. You also have the ability to import an CSV file, such as one that contains data from a previous backup.
In the feedback manager, you can head to the Data Manager section where you download all your feedback data into a easy to read spreadsheet. You'll be provided a file that's named similar to the example below.

```
03-07-2019-FEEDBACK_NAME.csv
```

### License
Feedy | Feedback Platform for your Website is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT). Enjoy!
Demo : https://feedy.btekno.id