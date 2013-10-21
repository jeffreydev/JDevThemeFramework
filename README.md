JDevThemeFramework
==================

WordPress Theme Framework Plugin

Documentation
==================

<h3>Custom Post Type</h3>
<h4> Parameters </h4>
<ul>
<li>$PostKey :  your CPT's unique key ex: my_post_name_key</li>
<li>$PostName : The name of your CPT, ex: My Post Name</li>
<li>$PostSingleName : The singular name, ex: My Post Name</li>
<li>$PostSlug : The url extension for you post, ex: my-post-name</li>
</ul>

<pre>Custom_Post_Type($PostKey, $PostName, $PostSingleName, $PostSlug)</pre>

<pre>$customPostType = new Custom_Post_Types('portfolio', 'Portfolio', 'Portfolio', 'porfolio-slug', 'post_icon_url');</pre>