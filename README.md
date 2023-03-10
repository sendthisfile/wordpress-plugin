<a name="readme-top"></a>
<!-- PROJECT SHIELDS -->
<!--
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/sendthisfile/wordpress-plugin">
    <img src="trunk/images/logo.svg" alt="Logo" height="200">
  </a>

<h3 align="center">SendThisFile Wordpress Plugin</h3>

  <p align="center">
    A WordPress plugin that allows you to receive files on your pages and posts using a SendThisFile website button.
    <br />
    <a href="https://github.com/sendthisfile/wordpress-plugin"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/sendthisfile/wordpress-plugin">View Demo</a>
    ·
    <a href="https://github.com/sendthisfile/wordpress-plugin/issues">Report Bug</a>
    ·
    <a href="https://github.com/sendthisfile/wordpress-plugin/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

Installing this plugin in Wordpress will give you the ability to add a [sendthisfile] shortcode to your content.  Placing a [sendthisfile] shortcode on your pages or posts will cause a button to be rendered.  When clicked, that button will allow the visitor to your site to send you files.

The plugin requires you to add a `buttonid`, that you obtain when you create a "Website Button" at <a href="https://sendthisfile.com">SendThisFile</a>. 

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

* [![php][php]][php-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- GETTING STARTED -->
## Getting Started

To get this WordPress plugin running, follow these simple steps.

### Prerequisites

1. Sign into SendThisFile.  If you don't have an account, [it's free to create one](https://app.sendthisfile.com/signup).  However, you will need a business plan with one user to create a Website Button.
2. Navigate to Integrations -> Website Button.
3. Add a new button, if you don't already have one.
4. Make sure you have added at least one recipient, and set the button to "Active".
5. In the "Button Code" section you will see a reference to a "buttonid".  Copy that buttonid to your clipboard. For example, given this "Button Code" content ...
   
   ```html
   <sendthisfile-button label="Send files" buttonid="ABCD-1234-88FE-77D3"></sendthisfile-button>
   ```
   you would copy the `ABCD-1234-88FE-77D3` id to your clipboard.

### Installation

1. Install this plugin using WordPress' Plugins admin tool.
2. Activate the plugin.
3. In the WP Admin, navigate to "SendThisFile".
4. Enter your button id into the "Default Buttonid" field and save it.

You are now ready to use your [sendthisfile] shortcode.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

You can add a ShortCode block, or edit your HTML and manually enter the [sendthisfile] shortcode on any page or post.   Wherever you place a block or manually enter the [sendthisfile] code, will cause a button to be rendered at that location.  You can add a button inline with your text.

When the button is clicked, it will open up a dialog that walks our website visitors through sending files to the recipient they select.  If there is only one recipient, it will skip prompting them for the recipient.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Potential Roadmap

- [ ] Add a live preview of the button to the setup screen.
- [ ] Add ability to sign into SendThisFile and retrieve the buttonid automatically.

See the [open issues](https://github.com/sendthisfile/wordpress-plugin/issues) for a full list of proposed features (and known issues).

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->
## License

Distributed under the GPLv3 License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->
## Contact

Project Link: [https://github.com/sendthisfile/wordpress-plugin](https://github.com/sendthisfile/wordpress-plugin)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

* [Eduardo Escobar](https://www.fiverr.com/torricelli) - The original author of this plugin.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/sendthisfile/wordpress-plugin.svg?style=for-the-badge
[contributors-url]: https://github.com/sendthisfile/wordpress-plugin/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/sendthisfile/wordpress-plugin.svg?style=for-the-badge
[forks-url]: https://github.com/sendthisfile/wordpress-plugin/network/members
[stars-shield]: https://img.shields.io/github/stars/sendthisfile/wordpress-plugin.svg?style=for-the-badge
[stars-url]: https://github.com/sendthisfile/wordpress-plugin/stargazers
[issues-shield]: https://img.shields.io/github/issues/sendthisfile/wordpress-plugin.svg?style=for-the-badge
[issues-url]: https://github.com/sendthisfile/wordpress-plugin/issues
[license-shield]: https://img.shields.io/github/license/sendthisfile/wordpress-plugin.svg?style=for-the-badge
[license-url]: https://github.com/sendthisfile/wordpress-plugin/blob/master/LICENSE.txt
[product-screenshot]: trunk/images/screenshot.jpg
[php]: https://img.shields.io/wordpress/plugin/required-php/bbpress
[php-url]: https://www.php.net/
