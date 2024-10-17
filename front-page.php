<?php get_header(); // Include the header ?>

<div class="container">
    <h1>Welcome to PureFaithTV</h1>
    <p>This is your custom homepage content. You can add whatever you like here!</p>
    
    <!-- Add any content or features for the homepage -->
Fonts
==============================================*/
@import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap');
/*================================================
General
================================================*/
body {
    background: var(--dark-color);
    font-family: var(--body-fonts);
    font-size: 1rem;
    font-style: normal;
    font-weight: normal;
    line-height: 2;
    color: var(--secondary-color);
    overflow-x: hidden;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: var(--title-fonts);
    color: var(--white-color);
    font-style: normal;
    text-transform: capitalize;
    font-weight: 600;
    margin: 0;
    letter-spacing: 0.02em;
    -ms-word-wrap: break-word;
    word-wrap: break-word;
}

h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a {
    color: inherit;
}

h1 {
    font-size: 40px;
    font-style: normal;
    line-height: 48px;
}

h2 {
    font-size: 36px;
    font-style: normal;
    line-height: 44px;
}

h3 {
    font-size: 32px;
    font-style: normal;
    line-height: 40px;
}

h4 {
    font-size: 28px;
    font-style: normal;
    line-height: 36px;
}

h5 {
    font-size: 24px;
    font-style: normal;
    line-height: 32px;
}

h6 {
    font-size: 20px;
    font-style: normal;
    line-height: 28px;
}
    
</div>

<?php get_footer(); // Include the footer ?>
