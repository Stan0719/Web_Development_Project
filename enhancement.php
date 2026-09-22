<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Enhancements</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
</head>
<body class="js-enhancement-body">
  <header class="js-enhancemnt-header">
    <h1>Website Enhancements</h1>
    <p>This page outlines the enhancements implemented on the Basic Brew website that go beyond the core HTML/CSS requirements.</p>
  </header>

  <main class="js-enhancemnt-main">
    <!--Jia Sin Enhancement-->
    <section class="js-enhancement">
      <h2>1. Gradient Title with Fade Animation</h2>
      <p>
        This enhancement adds a visually appealing gradient effect with a smooth fade-in animation to the main menu title. 
        It enhances the visual hierarchy and user engagement on the page.
      </p>
      
      <p> <strong>Extends the basic requirements:</strong> Uses CSS <code>linear-gradient</code> and <code>@keyframes</code> animation to create a dynamic title effect not taught in standard labs. </p>
    
      <h3>How it was implemented:</h3>
      <p>The following screenshot shows the gradient text and fade-in effect applied to the title:</p>
      <img src="images/enhancement/title_fade_in.png" alt="Gradient Title CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>Inspired by the method shared on <a href="https://www.delftstack.com/howto/css/css-fade-in/" target="_blank">How to Create a Fade-In Effect on Page Load in CSS</a>.</p>
    
      <h3>Live Example:</h3>
      <p><a href="product.html#coffee-menu">View it on the Product Page</a></p>
    </section>


    <section class="js-enhancement">
      <h2>2. 3D Interactive Box</h2>
      <p>
        Introduces a 3D flipping effect on product boxes when hovered over, allowing users to click and interact with them directly for a more engaging experience.
      </p>
      
      <p>
        <strong>Extends the basic requirements:</strong> This enhancement goes beyond standard design by implementing advanced CSS techniques like 3D transforms and interactive hover effects. The product boxes utilize <code>transform-style: preserve-3d</code>, <code>translateZ</code>, and <code>box-shadow</code> to create a dynamic flipping effect on hover, enhancing user interaction and visual appeal. These techniques introduce a level of depth and interactivity not covered in basic tutorials.
      </p>

    
      <h3>How it was implemented:</h3>
      <p>The following screenshot showcases the 3D flipping effect applied to the product boxes when hovered, offering an engaging interactive experience:</p>
      <img src="images/enhancement/3d_effect.png" alt="Gradient Title CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>Inspired by the method shared on <a href="http://xhslink.com/a/kkaCGb8Gk2cab" target="_blank">CSS | 个性3D产品展示卡</a>.</p>
    
      <h3>Live Example:</h3>
      <p><a href="product.html#signature-brews-part">View it on the Product Page</a></p>
    </section>


    <section class="js-enhancement">
      <h2>3. Hover-Expandable Cards</h2>
      <p>
        This enhancement allows category cards to smoothly expand horizontally when hovered. When card expand, category descriptions are revealed with a subtle background blur, and the category name becomes a styled, clickable button. Animated shadows create visual depth, guiding user attention.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> This feature uses advanced CSS techniques like <code>transform: scaleX()</code>, <code>transition</code>, and <code>filter: blur()</code> to deliver a modern interactive experience. The animated depth and hover expansion are not covered in foundational tutorials.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The following screenshot demonstrates the horizontal card expansion on hover, revealing additional category info with enhanced styling:
      </p>
      <img src="images/enhancement/card_expand.png" alt="Hover Expandable Cards Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Inspired by interactive UI designs from <a href="https://www.xiaohongshu.com/explore/65e2b54e0000000004003dc9?app_platform=android&ignoreEngage=true&app_version=8.78.1&share_from_user_hidden=true&xsec_source=app_share&type=video&xsec_token=CBF9Ou92JPUggHGjoQzhZcGsjUVw0-S9-30PcFxJXtgSk=&author_share=1&xhsshare=CopyLink&shareRedId=N0xDQ0k1PEI2NzUyOTgwNjY0OThHRj09&apptime=1744617508&share_id=fb32d14973e441c4b5a8fc49e6b720ba&share_channel=copy_link" target="_blank">Stunning HTML & CSS Card Animation</a> and adapted with custom transitions and blur effects.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="product.html#slider-section-part">View it on the Product Page</a></p>
    </section>


    <section class="js-enhancement">
      <h2>4. Flowing Light Animated Border for Title</h2>
      <p>
        This enhancement adds a visually striking animated border around the title using a conic-gradient effect. The border appears to flow with light, creating a futuristic and eye-catching visual cue that highlights the title section.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> Implements advanced CSS features such as <code>conic-gradient</code> and <code>@keyframes</code> to animate a rotating light border around titles. Also incorporates <code>@property</code> for smooth transitions, going far beyond typical border styling.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The screenshot displays the glowing border animation around the section title:
      </p>
      <img src="images/enhancement/category_title.png" alt="Flowing Light Border Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Inspired by CSS gradient animations from <a href="https://youtu.be/ezP4kbOvs_E?si=IQI-gKXCII_fxUDE" target="_blank">Learn CSS Border Animations in 6 Minutes</a> and customized for dynamic borders.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="basic1.html#top">View it on the Basic Brew page</a></p>
    </section>


    <section class="js-enhancement">
      <h2>5. Hover Zoom Effect on Drink Images</h2>
      <p>
        This feature enhances the visual experience of the product images by adding a zoom-in effect on hover. It helps draw user attention to drink items and creates an engaging, interactive visual effect.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> Implements advanced CSS features such as <code>transform: scale()</code> effect on hover, with smooth <code>transition</code> timing to draw attention and add motion to static images — a modern practice not covered in basic image styling.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The screenshot below shows the zoom effect applied to drink images when hovered:
      </p>
      <img src="images/enhancement/product-price-part.png" alt="Hover Zoom Effect Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Inspired by visual transitions from <a href="https://www.xiaohongshu.com/explore/65e659450000000004001d28?app_platform=android&ignoreEngage=true&app_version=8.78.1&share_from_user_hidden=true&xsec_source=app_share&type=video&xsec_token=CB5h_vzfF_nII4xFMyq0AHWkbpjRzIgzVGEuesh30Gpzs=&author_share=1&xhsshare=CopyLink&shareRedId=N0xDQ0k1PEI2NzUyOTgwNjY0OThHRj09&apptime=1744617664&share_id=be4abda5494d4cc8a53d0c65e3c450b8&share_channel=copy_link" target="_blank">Image Zoom on Hover effect using HTML & CSS | CSS Image effects</a>.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="basic1.html#drinks-part">View it on the Basic Brew page</a></p>
    </section>
    

    <section class="js-enhancement">
      <h2>6. Fade-In product price</h2>
      <p>
        Product price smoothly fade intowhen hovered, drawing attention to visuals and boosting interactivity.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> This enhancement uses CSS <code>opacity</code>, <code>transition</code>, and selective <code>hover</code> targeting to create a clean fade-in effect for product price.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The screenshot below illustrates the fade-in for product price during hover:
      </p>
      <img src="images/enhancement/product-price-part.png" alt="Fade-In Drink Details Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Inspired by visual transitions from <a href="https://www.xiaohongshu.com/explore/65e659450000000004001d28?app_platform=android&ignoreEngage=true&app_version=8.78.1&share_from_user_hidden=true&xsec_source=app_share&type=video&xsec_token=CB5h_vzfF_nII4xFMyq0AHWkbpjRzIgzVGEuesh30Gpzs=&author_share=1&xhsshare=CopyLink&shareRedId=N0xDQ0k1PEI2NzUyOTgwNjY0OThHRj09&apptime=1744617664&share_id=be4abda5494d4cc8a53d0c65e3c450b8&share_channel=copy_link" target="_blank">Image Zoom on Hover effect using HTML & CSS | CSS Image effects</a>.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="basic1.html#drinks-part">View it on the Basic Brew page</a></p>
    </section>
    


    <section class="js-enhancement">
      <h2>7. Hover Effects on List Items</h2>
      <p>
        This enhancement improves the visibility and interactivity of list items by applying subtle shifts and shadow effects on hover.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> Enhances list interactivity using <code>transform: translateY()</code> and <code>box-shadow</code>.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The screenshot shows how list items respond to hover with shadow and position changes:
      </p>
      <img src="images/enhancement/list-part.png" alt="Hover List Items Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Based on design patterns discussed in <a href="https://css-tricks.com/almanac/properties/b/box-shadow/" target="_blank">CSS-Tricks Almanac</a> and customized for this layout.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="basic1.html#list-part">View it on the Basic Brew page</a></p>
    </section>
    


    <section class="js-enhancement">
      <h2>8. Tooltip-Enhanced Social Media Icons</h2>
      <p>
        Social media icons have been enhanced with animated tooltips and background fill effects. This not only improves accessibility but also makes the icons more intuitive and engaging.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> Applies pseudo-elements and <code>:hover</code> state animations to create fully styled, animated tooltips with background color transitions. These effects enhance accessibility and UX without JavaScript.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The screenshot highlights the tooltip text and animated background appearing on hover:
      </p>
      <img src="images/enhancement/icon-part.png" alt="Social Media Icons Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Inspired by accessible design techniques from <a href="https://www.youtube.com/watch?v=dQlRgvysmuM" target="_blank">Social Media Icon with Tooltip on Hover Using HTML & CSS</a>.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="basic1.html#icon-part">View it on the Basic Brew page</a></p>
    </section>
    


    <section class="js-enhancement">
      <h2>9. Bottom Navigation Bar</h2>
      <p>
        A fixed bottom navigation bar was added to improve usability on mobile and small devices. It includes animated underline effects that provide feedback when a link is hovered or tapped.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> Integrates a responsive, mobile-friendly animated underlines via <code>transform scaleX</code> and <code>transition</code>, ensuring modern, touch-friendly navigation.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The screenshot displays the sticky navigation bar with animated underline hover states:
      </p>
      <img src="images/enhancement/navigation-part.png" alt="Bottom Navigation Bar Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Inspired by mobile UI patterns from <a href="https://www.youtube.com/watch?v=znX05slOFeo" target="_blank">Google Bottom Nav Bar using HTML CSS only!</a>.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="basic1.html#navigation-part">View it on the Basic Brew page</a></p>
    </section>
    

    <section class="js-enhancement">
      <h2>10. Animated "Back to Top" Button</h2>
      <p>
        This enhancement adds a floating “Back to Top” button that expands and reveals a label on hover. It improves page navigation, especially on longer pages, while also serving as a dynamic design element.
      </p>
    
      <p>
        <strong>Extends the basic requirements:</strong> Uses pure CSS <code>keyframes</code>, <code>transform: translateY()</code>, and <code>opacity</code> to animate the button on hover. The expanding label and bounce effect make it both functional and visually engaging.
      </p>
    
      <h3>How it was implemented:</h3>
      <p>
        The screenshot shows the hover state of the "Back to Top" button with the label revealed:
      </p>
      <img src="images/enhancement/back-to-top-part.png" alt="Back to Top Button Screenshot" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>
        Concept adapted from scroll-friendly button designs found on <a href="https://css-tricks.com/scroll-to-top-links/" target="_blank">CSS-Tricks</a>.
      </p>
    
      <h3>Live Example:</h3>
      <p><a href="basic1.html#navigation-part">View it on the Basic Brew page</a></p>
    </section> 

    <!--Jia Xuan Enhancement-->
    <section class="js-enhancement">
      <h2>11. Activity page for carousel</h2>
      <p>This enhancement adds a carousel feature to the Activity page, allowing users to smoothly switch between "Current Activities," "Coming Soon," and "Past Activities" sections.
         It provides a more interactive and engaging user experience without relying on any JavaScript, ensuring faster page load times and better accessibility.
      </p>
      
      <p><strong>Extends the basic requirements:</strong> Creates a fully functional carousel by using only HTML radio buttons and CSS transitions to control the slide movement, which goes beyond the standard static page designs taught in labs.</p>
    
      <h3>How it was implemented:</h3>
      <p>
      The carousel structure uses hidden HTML radio buttons to detect user selections.
      CSS sibling selectors and the <code>transform: translateX()</code> property are used to slide the carousel to the correct position.
      Navigation buttons are linked to each radio input using <code>label</code> elements, creating an intuitive and smooth carousel interaction.
      </p>
      <img src="images/enhancement/carousel.png" alt="Activity Page Carousel Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>Inspired by the tutorial <a href="https://youtu.be/eLHSFxF0Z4U?si=K9NRNUT5296WzByJ" target="_blank">"Create an Image Carousel Using HTML and CSS Only" on YouTube</a>.</p>
    
      <h3>Live Example:</h3>
      <p><a href="Activity.html#carousel">View it on the Activity Page.</a></p>
    </section>
    
    
    <section class="js-enhancement">
      <h2>12. Current, comming soon and pass activities for flip card animation</h2>
      <p>This enhancement adds a flip card animation to the current, coming soon and pass activities page, allowing users to interact with event cards by flipping them to reveal the event terms.
      It provides a more engaging and dynamic user experience without using any JavaScript, ensuring fast loading and maintaining accessibility.
      </p>
    
      <p><strong>Extends the basic requirements:</strong> Introduces a 3D flip card effect using only HTML and CSS, which goes beyond the typical static content designs covered in the standard course materials.</p>
  
      <h3>How it was implemented:</h3>
      <p>
      The flip card uses a container with the <code>perspective</code> property to create the 3D environment. 
      The card itself uses <code>transform-style: preserve-3d</code> and <code>transition</code> properties to smoothly rotate 180 degrees on hover.
      Both the front and back sides are positioned absolutely and styled with <code>backface-visibility: hidden</code> to hide the opposite side during rotation.
      </p>
      <img src="images/enhancement/flipcard_JX.jpeg" alt="Current, coming soon and pass activities page for flip card code" class="enhancement-image" />
  
      <h3>Source:</h3>
      <p>Based on CSS flip card tutorials such as <a href="https://youtu.be/NCLdf661ILE?si=J2liEesC9WSOYd-_" target="_blank">Easy Flipcard Tutorial | HTML & CSS</a>.</p>
  
      <h3>Live Example:</h3>
      <p>View the flip cards on
      <a href="Current.html#flipcard-current">Current Activities</a>, 
      <a href="Coming_Soon.html#flipcard-comingsoon">Coming Soon</a>, and 
      <a href="Pass_Activities.html#flipcard-pass">Pass Activities</a> sections.
      </p>
    </section>
    
    <section class="js-enhancement">
      <h2>13. Button Hover Effects for Join Us Page</h2>
      <p>This enhancement adds hover effects to the "Join Now" and "Learn More" buttons on the Join Us page, providing users with visual feedback when interacting with buttons.</p>
    
      <p><strong>Extends the basic requirements:</strong> Introduces dynamic styling through CSS hover effects and transforms, which go beyond the basic static button styles typically demonstrated in standard course materials.</p>
  
      <h3>How it was implemented:</h3>
      <p>The buttons use the<code>: hover</code> pseudo-class combined with <code>background-color</code> changes and a slight <code>transform: translateY</code> movement to create an interactive "lift" effect.
      A smooth <code>transition</code> property is added to ensure the animation feels natural and fluid when users hover over the buttons.
      </p>
      <img src="images/enhancement/buttonhover.png" alt="Button hover effect code for Join Us page" class="enhancement-image" />
  
      <h3>Source:</h3>
      <p>The hover effect idea for the button was inspired by techniques from <a href="https://www.sliderrevolution.com/resources/css-button-hover-effects/" target="_blank">The 55 Best CSS Button Hover Effects You Can Use Too</a>.</p>
  
      <h3>Live Example:</h3>
      <p><a href="joinus.html#buttonhover">View it on the Join Us Page.</a></p>
    </section>
    
    <section class="js-enhancement">
      <h2>14. Photo and CV Upload Feature in Join Us Form</h2>
      <p>This enhancement allows users to upload both a profile photo and a CV file when filling out the Join Us form. 
      It improves the form's functionality by enabling applicants to submit additional important documents directly, making the application process more complete and efficient.
      </p>
    
      <p><strong>Extends the basic requirements:</strong> Enhances a standard HTML form by introducing two separate <code>&lt;input type="file"&gt;</code> fields — one for uploading an image and another for uploading a document file. 
      This goes beyond the basic text inputs and dropdowns typically covered in the course materials, creating a more professional and real-world recruitment form.</p>
  
      <h3>How it was implemented:</h3>
      <p>
      Two file input fields were added to the Join Us form. 
      One field accepts image files (<code>accept="image/*"</code>) for profile photo uploads, and the other accepts document files like PDFs (<code>accept=".pdf,.doc,.docx"</code>) for CV uploads.
      CSS styling was applied to ensure both upload sections are visually consistent with the rest of the form elements.
      </p>
      <img src="images/enhancement/uploadphotocv.png" alt="Screenshot showing photo and CV upload fields in the Join Us form" class="enhancement-image" />
  
      <h3>Source:</h3>
      <p>Based on standard HTML form tutorials such as <a href="https://www.w3schools.com/howto/tryit.asp?filename=tryhow_html_file_upload_button" target="_blank">HTML Forms Guide</a>.</p>
  
      <h3>Live Example:</h3>
      <p>View the flip cards on
      <a href="joinusform.html#cv_upload">CV upload</a>, and
      <a href="joinusform.html#photo_upload">Photo upload</a> sections.
      </p>
    </section>
    
    <section class="js-enhancement">
      <h2>15. Expandable FAQ Section</h2>
      <p>This enhancement adds an expandable FAQ section to the Learn More page, allowing users to click a question to reveal or collapse the answer. The use of the <code>&lt;details&gt;</code> and <code>&lt;summary&gt;</code> elements provides a clean, simple solution that doesn’t require JavaScript.</p>
    
      <p><strong>Extends the basic requirements:</strong> The FAQ section goes beyond static content display by offering an interactive user experience with smooth expand/collapse animations achieved purely through CSS. This approach improves page organization by displaying only the questions, while answers appear only when clicked, minimizing clutter and enhancing usability.</p>
  
      <h3>How it was implemented:</h3>
      <p>The FAQ section uses the <code>&lt;details&gt;</code> HTML element, which provides a built-in toggle feature. 
      The <code>&lt;summary&gt;</code> element contains the question, and clicking it expands or collapses the <code>&lt;div&gt;</code> with the answer. 
      CSS transitions and icon rotations create a smooth, engaging effect when expanding or collapsing each section.
      </p>
      <img src="images/enhancement/expandablefaq.png" alt="Expandable FAQ Section code" class="enhancement-image" />
  
      <h3>Source:</h3>
      <p>The expandable FAQ feature was inspired by <a href="https://youtu.be/ioa8T4tA4zg?si=cgcoJ3xs_huOm47L" target="_blank">code interactive FAQ section</a> and <a href="https://youtu.be/d8-oOCMBx10?si=7RbcdhZ9QH4Wys-C" target="_blank">Responsive FAQ Page Website using HTML and CSS only</a>.</p>
  
      <h3>Live Example:</h3>
      <p><a href="learnmore.html#expandablefaq">View it on the Learn More Page.</a></p>
    </section>


    <!--Stanton Enhancement-->
    <section class="js-enhancement">
      <h2>16. Sticky Navigation Bar with CSS Only</h2>
      <p>
        This enhancement ensures the main navigation bar remains visible at the top of the screen while users scroll. It improves navigation accessibility and user experience.
      </p>
      <p><strong>Extends the basic requirements:</strong> Uses CSS <code>position: sticky</code> and <code>top: 0</code> to achieve fixed positioning without JavaScript.</p>
    
      <h3>How it was implemented:</h3>
      <p>The following CSS snippet was applied to the navigation container:</p>
      <img src="images/enhancement/stickynav.jpeg" alt="Sticky Navbar CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p><a href="https://www.w3schools.com/howto/howto_css_sticky_element.asp" target="_blank">W3Schools - Sticky Element</a></p>
    
      <h3>Live Example:</h3>
      <p><a href="index.html">View it on the Homepage</a></p>
    </section>


    <section class="js-enhancement">
      <h2>17. Parallax Header</h2>
      <p>
        This enhancement adds a parallax effect to the header using a fixed background image, creating visual depth and a more immersive first impression.
      </p>
      <p><strong>Extends the basic requirements:</strong> Uses <code>background-attachment: fixed</code> to simulate parallax scrolling purely with CSS.</p>
    
      <h3>How it was implemented:</h3>
      <p>The following CSS properties were added to the header section:</p>
      <img src="images/enhancement/parallax_header.jpg" alt="Parallax Header CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p><a href="https://www.w3schools.com/howto/howto_css_parallax.asp" target="_blank">W3Schools - Parallax Scrolling Effect</a></p>
    
      <h3>Live Example:</h3>
      <p><a href="index.html#parallax-header">View it on the Homepage</a></p>
    </section>


    <section class="js-enhancement">
      <h2>18. Flip Cards for "Meet the Team"</h2>
      <p>
        This enhancement adds 3D flip animation to team member cards. Users can hover to flip and reveal contact links like Instagram and Facebook on the back side.
      </p>
      <p><strong>Extends the basic requirements:</strong> Uses <code>transform: rotateX</code>, <code>rotateZ</code>, and <code>preserve-3d</code> to create interactive cards.</p>
    
      <h3>How it was implemented:</h3>
      <p>The team cards use a front and back container with 3D rotation on hover:</p>
      <img src="images/enhancement/flipcard.jpg" alt="Flip Card CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p><a href="https://www.w3schools.com/howto/howto_css_flip_card.asp" target="_blank">W3Schools - CSS Flip Cards</a></p>
    
      <h3>Live Example:</h3>
      <p><a href="index.html#team">View it in the Meet the Team section</a></p>
    </section>

	
    <section class="js-enhancement">
      <h2>19. Best Seller Floating Boxes</h2>
      <p>
        This enhancement uses 3D transformation and hover effects to showcase the best-selling drinks in an eye-catching and interactive layout.
      </p>
      <p><strong>Extends the basic requirements:</strong> Uses <code>transform: translateZ</code> and <code>rotateX</code> for a dynamic hover experience with depth.</p>
    
      <h3>How it was implemented:</h3>
      <p>The image container and box use nested 3D transforms to animate on hover:</p>
      <img src="images/enhancement/bestseller.jpg" alt="Best Seller Box CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transform" target="_blank">MDN Web Docs - CSS Transform</a></p>
    
      <h3>Live Example:</h3>
      <p><a href="index.html#best-sellers">View it in the Our Best Sellers section</a></p>
    </section>



    <section class="js-enhancement">
      <h2>20. Dropdown Navigation Menu (CSS-Only)</h2>
      <p>
        This enhancement introduces a multi-level dropdown menu in the navigation bar, allowing users to easily access subcategories under "Product Selection" without needing JavaScript.
      </p>
      <p><strong>Extends the basic requirements:</strong> Uses pure CSS hover states to display nested menu items in a clean and responsive layout.</p>
    
      <h3>How it was implemented:</h3>
      <p>
        The <code>li</code> with class <code>dropdown</code> contains a nested <code>ul</code> with class <code>dropdown-content</code>. On hover, the dropdown becomes visible using <code>:hover</code> and <code>display: block</code>. Styling includes background colors, padding, and shadow effects for better usability.
      </p>
      <img src="images/enhancement/dropdown.jpg" alt="Dropdown Menu CSS Code" class="enhancement-image"/>
    
      <h3>Source:</h3>
      <p>
        <a href="https://www.w3schools.com/css/css_dropdowns.asp" target="_blank">W3Schools – CSS Dropdowns</a><br>
        <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/:hover" target="_blank">MDN Web Docs – :hover Pseudo-class</a>
      </p>                                                                                    
      
      <h3>Live Example:</h3>
      <p><a href="enquiry.html">View it on the Navbar under Product Selection</a></p>
    </section>

    <!--Angie Enhancement-->
    <section class="js-enhancement">
      <h2>21. Responsive Card Layout and Hover Animation Enhancement</h2>
      <p>
        The enhancement is used to improve the layout, interactivity, and responsiveness of the "About Us" section. Itadds engaging hover 	animations to create a more modern and user-friendly experience.
      </p>
      
      <p> <strong>Extends the basic requirements:</strong> Uses CSS</br><code>flex-wrap</code> - allow flex items to wrap onto the next line if there isn't enough space, <code>overflow</code> - controls what happens when content is too big for its container., <code>flex-shrink</code> - tells the browser how to resize an image to fit its container., <code>object-fit</code> - ensures that profile pictures fill their space nicely without stretching or distortion., <code>position</code> - used to move the image and text during hover, allowing animations like the photo shifting into a circle at the top., <code>transition</code> - makes hover effects smooth and polished instead of jumping instantly. and <code>transform</code> - allows elements to move, rotate and scale. </p>
    
      <h3>How it was implemented:</h3>
      <p>This enhancement was added to make the "About Us" section look better. The layout uses Flexbox to arrange the student cards neatly in a row, and each card has a hover effect that makes the photo smaller and round, while the name moves up. This makes the design more fun and interactive.
        We also fixed a small mistake (flex-warp was changed to flex-wrap) and made sure the layout adjusts properly on phones and smaller screens by using a media query. On mobile, the cards stack vertically and become easier to read.</p>
      <img src="images/enhancement/profile-part.jpg" alt="Gradient Title CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>Inspired by the method shared on <a href="http://xhslink.com/a/GBworaQQUhsab">How to Create card in CSS</a>.</p>
    
      <h3>Live Example:</h3>
      <p><a href="aboutus.html#aboutus">View it on the About Us</a></p>
    </section>


    <section class="js-enhancement">
      <h2>22. Floating Label Effect for Form Inputs</h2>
      <p>This enhancement uses a floating label effect, where labels dynamically move above the input field on focus or when data is entered. It improves form usability by ensuring labels remain visible at all times, providing better guidance and reducing user errors. The animation also contributes to a modern and visually appealing interface.
       </p>
      
      <p> <strong>Extends the basic requirements:</strong> Uses CSS</br> <code>top</code> 
<code>left</code> -  use this two elements to move the label (<span>) into a new position when the input is focused or has text in it. </p>
    
      <h3>How it was implemented:</h3>
      <p>It styles form elements using class and element selectors and enhances interactivity with pseudo-classes and transitions. The floating label effect, button hovers, and responsive design contribute to a modern, user-friendly interface.
      </p>
      <img src="images/enhancement/member-part.jpg" alt="Gradient Title CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>Inspired by the method shared on <a href="https://uiverse.io/ammarsaa/chatty-firefox-25">How to float the information when the user click the column in  HTML</a>.</p>
    
      <h3>Live Example:</h3>
      <p><a href="memberregistrationform.html#formgroup">View it on the Member Registration Form</a></p>
    </section>

    <section class="js-enhancement">
      <h2>23. Animated Skew Slide Button</h2>
      <p>The sliding black background with a skew transforms the button from a static element into a dynamic and eye-catching component. This draws users’ attention and adds a modern, professional feel to the webpage.
       </p>
      
      <p> <strong>Extends the basic requirements:</strong> Uses CSS</br> <code>cursor</code> - Changes the cursor to a hand icon, which signals to users that the element is clickable , <code>letter-spacing</code> - Spreads out the text slightly, making it look more stylish or readable, <code>z-index</code> -  Ensures the text inside the button appears on top of the animated background, so it’s always visible  and <code>content</code> - This creates an empty element that you can style and animate (e.g., your sliding black background). Without content, the pseudo-element won’t appear</p>
    
      <h3>How it was implemented:</h3>
      <p>The CSS script is implemented by combining button styling, pseudo-elements (::before), and hover transitions. These work together to create an animated button that responds to user interaction with a sliding background and color change—making it more visually engaging and interactive.
      </p>
      <img src="images/enhancement/animated-part.jpg" alt="Gradient Title CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>Inspired by the method shared on <a href="https://uiverse.io/satyamchaudharydev/modern-sheep-10">How change the colour on the button when I hover the button</a>.</p>
    
      <h3>Live Example:</h3>
      <p><a href="angie.html#emailbutton">View it on our profile page</a></p>
    </section>

    <section class="js-enhancement">
      <h2>24. Interactive Flip Card Design with Hover Effect</h2>
      <p>it’s a visual interaction used to show two sides of content like before and after photos.
       </p>
      
      <p> <strong>Extends the basic requirements:</strong> Uses CSS</br> <code>-webkit-box-shadow</code> - add a shadow effect around the card for depth, <code>-webkit-transform</code> - used for cross-browser support to apply visual transformations, <code>-ms-transform-</code> - applies 2D or 3D transformations to element, <code>-webkit-perspective</code> - gives a 3D depth effect to child elements that are transformed in 3D space, <code>perspective</code> - defines the distance between the user and the 3D element, <code>-webkit-box-align</code> -vertically align child items in a webkit flexbox model, <code>-ms-flex-align</code> - alignscontent vertically in the flexbox, <code>-webkit-box-pack</code> - align content horixzontally in the flexbox, <code>-webkit-transition</code> - add a smooth animation, <code>-webkit-transform-origin</code> - for Webkit browsers like Safari, <code>transform-origin</code> - sets the point from which the transform starts,, <code>transform</code> - applies visual transformations</p>
    
      <h3>How it was implemented:</h3>
      <p>This CSS implementation creates a 3D flip card layout using Flexbox for alignment, box-shadow for depth, and transform properties with perspective to enable a smooth flipping effect between the front and back faces
      </p>
      <img src="images/enhancement/3dflip.jpg" alt="Gradient Title CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p>Inspired by the method shared on <a href="https://uiverse.io/vamsidevendrakumar/soft-shrimp-94">How to flip the card</a>.</p>
    
      <h3>Live Example:</h3>
      <p><a href="jiasin.html#block">View it on our profile page</a></p>
    </section>
	
	 <section class="js-enhancement">
      <h2>25.Hamburger Menu For Smaller Devices</h2>
      <p>
        This enhancement introduces a responsive hamburger menu that transforms the navigation bar into a compact, mobile-friendly menu on smaller screens. 
		The hamburger menu improves usability by condensing navigation links into an expandable menu, ensuring a clean and accessible interface on mobile devices.
      </p>
      <p><strong>Extends the basic requirements:</strong>Uses CSS media queries to switch between desktop and mobile navigation, 
	  with an input checkbox hack <code>(input[type="checkbox"])<code> to toggle a full-width, vertically stacked mobile menu, and smooth transitions for the hamburger icon.</p>
    
      <h3>How it was implemented:</h3>
	  <p>A hidden checkbox toggle controls the menu, with a hamburger icon that becomes a close icon; on mobile, links are shown when toggled, and dropdowns display inline without absolute positioning.</p>
      <img src="images/enhancement/hamburger.jpg" alt="Flip Card CSS Code" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p><a href="https://css-tricks.com/the-checkbox-hack/" target="_blank">CSS-Tricks: The Checkbox Hack</a></p>
		<p><a href="https://www.w3schools.com/howto/howto_js_mobile_navbar.asp" target="_blank">W3Schools: How to Create a Mobile Navigation Menu</a></p>
      <h3>Live Example:</h3>
      <p><a href="index.html">Main page first container</a></p>
    </section>

  	 <section class="js-enhancement">
    <h2>26. User Managment Module</h2>
    <p>
      To improve the security and reliability of the admin user management system. </br>
      1. Delete user was enhanced with session validation and prepared statements to prevent unauthorized acess.</br>
      2. Edit user enforces admin-only acess, user secure data fetching and hides password with an optional update field.</br>
      3. Update user improves password handling by updating only when a new password is provided, upsing input sanitization and prepared statements for added security.</br>
    </p>
      <p><strong>Extends the basic requirements:</strong>By adding secure admin access, preventing injection, protecting user passwords and improving overall data integrity and system reliability
      </p>
    
      <h3>How it was implemented:</h3>
	  <p>By adding session checks to restrict acess to admins, using prepared statementts to prevent injection, hiding stored password in the edit form and updating password only when a new one is provided, ensuring secure and reliable data handling throughout the system.</p>
      <img src="images/enhancement/admin_management.png" alt="User Management Module" class="enhancement-image" />
    </section>

    <section class="js-enhancement">
      <h2>27.Product Search Feature</h2>
      <p>
        This enhancement adds a site-wide search feature that scans multiple pages, highlight matching keywords and displays relevant snippets with links to improve user navigation and information access.
      </p>
      <p><strong>Extends the basic requirements:</strong>By going beyond statice page navigation, enabling dynamic content discovery across multiple files, improving usability, accessibility and user engagement through interactive search functionality.
      </p>
    
      <h3>How it was implemented:</h3>
	  <p>Using PHP to scan multiple files, clean content, search for keyworrds and display highlighted results with links.</p>
      <img src="images/enhancement/prodcut_search.jpg" alt="Product Search Feature" class="enhancement-image" />
    
      <h3>Source:</h3>
      <p><a href="https://phppot.com/php/highlighting-keywords-in-search-results-with-php/" target="_blank">phppot: Highlighting Keywords in Search Results with PHP</a></p>
		<p><a href="https://www.themecircle.net/how-to-make-a-search-engine-in-php-step-by-step-guide/" target="_blank">ThemeCircle: Make a Search Engine</a></p>
    </section>

    	 <section class="js-enhancement">
      <h2>28. User Authentication Module</h2>
      <p>This enhancement ensures only logged-in users can access the page by displaying a login prompt and redirecting unauthenticated users, improving security and user flow.
        
      </p>
      <p><strong>Extends the basic requirements:</strong>By adding user authentication control, preventing unauthorized access to protect actions and enhancing overall site security.
    </p>
    
      <h3>How it was implemented:</h3>
	  <p>By checking the session for a logged-in user and displaying a login prompt with a redirect if the user is not authenticated.</p>
      <img src="images/enhancement/user_authentication.jpg" alt="User Authentication Module" class="enhancement-image" />

    <h3>Source:</h3>
      <p><a href="https://www.php.net/manual/en/features.http-auth.php" target="_blank">php: HTTP authentication with PHP</a></p>
    </section>


    <!--back to home button-->
    <button class="home-button" onclick="window.location.href='index.html'">Home</button>
    
  </main>

   <?php include 'footer.php'; ?>



</body>
</html>
