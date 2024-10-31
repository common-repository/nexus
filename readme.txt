=== NEXUS ===
Contributors: jamesparkninja, freemius
Donate link: https://www.paypal.me/jamesparkninja/4
Tags: ticketing, request, project management, system, basic, ticketing system, request system, tickets, bugs, tracker, freelancing, job quotes, job application, job bidding, client budget
Requires at least: 4.6
Tested up to: 4.7
Stable tag: 2.0
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A front-end request ticketing and project management system built to be used with any up-to-date WordPress website.

== Description ==

NEXUS is a **front-facing** ticket and project management system, where all of the functionality is displayed on a designated public page selected by the Administrator. 

The plugin lets you: 

*   Add and remove request types!
*   Add request tickets for any purpose!
*   Allow front-end users to submit and comment on requests!
*   Let assignees pick up, apply for, and complete tickets, and in Team Mode even assign other people to pick them up!
*   Send automatic emails to the requestee after every stage - keeping them in the loop every step of the way!
*   Update requests with images and text - perfect for design mockups and further questions!
*   Track time against allocated requests in Team Mode!
*   Auto-calculate request cost, based on hourly-rate (GBP, USD, Au Dollar, and EUR only - for now)!
*   Allow requestees to add a budget for their job and pick which assignee picks up the request!
*   List assignees by prior rating!
*   & More!

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/nexus` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the **"Plugins"** screen in WordPress.
3. Use the **"Nexus Options"** screen to configure the plugin, a description of each option is below. If you want more details about the dashboard functionality, click this link, or the one following the below instructions: 

_**DEFAULT SETTINGS**_

*   **Dashboard Page** : This front-facing page serves as the plugin's dashboard, and is where all of the plugin's interaction will take place.
*   **Clients Need Activation?** : This will prevent new users from adding to the system without first being approved by an Administrator.
*   **Email Options** : NEXUS usually sends out a confirmation email to both a client and assigned admin at the completion of a job's stage. This can be turned on and off here, along with choosing what email address these should appear from. (To prevent issues, best using an email address with the same domain name as the website).
*    **Debug Options** : Sends all automated emails to the specified email address, useful for debugging any issues with the email system.

_**MODE SELECTION**_

*   **Team Mode** : The original NEXUS mode, this is for businesses or teams where all of the administrators are working under the same company. This means every administrator can see the details of every job, whether they've taken it or not, and will be able to pick up, transfer, or reject requests in the stead of another administrator.
*    **Time Tracker** : Exclusive to _Team Mode_ the time tracker allows an administrator to start/stop a small stopwatch for each job he works on, allowing for an accurate timing of each request. This will appear fixed to the bottom of the dashboard screen for Administrators, if switched on.

*   **Community Mode** : An alternative mode for NEXUS, this allows the site to be run as if each Administrator is a separate business or group or freelancer. Requests/jobs will be set by clients with a budget, and will be "bid" for with a quote and/or description, and will also showcase the rating given from other jobs completed. Turning this on will automatically turn off **Team Mode**.
*    **Include "Budget" field for clients** : This option turns on/off the request for a "Budget" from the client. Useful if the jobs submitted are not for monetary value, or will be quote upon without budgetary influence.
*    **Toggle Public Request Lists** : Turning this on will show all requests/jobs to the public without logging in. It will mask emails and names, for privacy reasons. This is a handy option for those trying to market their site with what kinds of jobs would be available.

_**CURRENCY SETTINGS**_

*   **Hourly Rate** : For combination with "Team Mode" and the "Time Tracker", setting this will calculate a final cost for the time put into each job once the request is marked as complete.
*    **System Currency** : Select which currency the Hourly Rate will use. Currently supports: USD, AUD, EUR, and GBP.

_**THEME SETTINGS**_

*   **Top Bar Logo** : Allows you to upload a logo image to replace the one on the top-right of the dashboard, uses a white background.
*    **Sidebar Logo** : Allows you to upload a logo to replace the one on the logged out dashboard homepage. Uses a background of #0B0B0B.
*    **Request Colour Scheme** : Allows you to change the colours of the notification stages of the requests. Will filter through to the front-end dashboard.

_**REQUEST TYPE REGISTRATION**_

*   Register up to 5 request types. Examples of which could be: "Building Jobs", "Projects", "Design Requests", "General Enquiries", "Bugs", etc.


== Frequently Asked Questions ==

== Screenshots ==

1. NEXUS Front-end Admin Dashboard
2. NEXUS Request/Job Preview Panel (shows in list of available requests)
3. NEXUS Single Request/Job Overview

== Changelog ==

= 2.0 =
* Brand new version
* Community Mode added
* Theme options added
* Public Lists option added
* Client budget added
* "Apply for job" functionality added
* and more!

= 1.3 =
* Added time-tracker and hourly rate calculator functionality.

= 1.2 =
* Cleaner, easier to use admin settings, with added descriptions for better understanding of the functionality.

= 1.0 =
* CRITICAL BUGFIX & DESIGN UPDATE - Fixed bug where assigned requests would be hidden. Updated data display format for requests. Full bug-testing via peer.

= 0.9 =
* CRITICAL BUGFIX - Stops entire plugin from breaking on certain browser configurations

= 0.8.1 =
* Small update adding communicative submenus

= 0.8 =
* Added analytics to allow for easier communitication between user needs and plugin update schedules

= 0.7 =
* Updated "My Requests" list to use a more filtered structure (Assigned / Signoff)

= 0.6 =
* First WordPress release

== Upgrade Notice ==

N/A