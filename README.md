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

<h4>Supported Attributes</h4>
<pre> $customPostType->jdevSupports = array( 'title', 'editor', 'thumbnail', 'page-attributes' );</pre>


<h3>Custom Taxonomy</h3>
<h4> Parameters </h4>
<ul>
<li>$TaxKey :  your Taxonomies unique key </li>
<li>$PostType : The name of your CPT Key you would like your taxonomy to go under.</li>
<li>$TaxTitle : The visual title of your Taxonony</li>
<li>$TaxSlug : The url extension for you Taxonomy, ex: my-post-name</li>
</ul>

<pre>Custom_Taxonomy($TaxKey, $PostType, $TaxTitle, $TaxSlug, $PostPage)</pre>

<pre>$customTaxonomy = new Custom_Taxonomy( 'categories', 'portfolio', 'Categories', 'portfolio-categories');</pre>