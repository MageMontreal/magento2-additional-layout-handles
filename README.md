# magento2-additional-layout-handles

#Features
<ul>
<li>Add Attribute Set Layout Handle (catalog_product_view_attribute_set_id_XX.xml)</li>
<li>Add Category Level Layout Handle (catalog_category_view_level_XX.xml)</li>
</ul>

<h2>Composer Installation Instructions</h2>
<pre>
  composer require magemontreal/additional-layout-handles
</pre>


<br/>

<h3>Enable MageMontreal/AdditionalLayoutHandles Module</h3>
To Enable this module you need to follow these steps:

<ul>
<li>
<strong>Enable the Module</strong>
<pre>bin/magento module:enable MageMontreal_AdditionalLayoutHandles</pre></li>
<li>
<strong>Run Upgrade Setup</strong>
<pre>bin/magento setup:upgrade</pre></li>
<li>
<strong>Re-Compile (in-case you have compilation enabled)</strong>
	<pre>bin/magento setup:di:compile</pre>
</li>
</ul>

