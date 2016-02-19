<?php

function schema_Attribute($prop, $scope) {
	/**
	 * Print Schema attributes safely into a tag.
	 *
	 * If available, this can forward an itemprop key,
	 * and include itemscope when an itemtype is specified.
	 *
	 * @since 0.0.1
	 *
	 * @param string $prop The itemprop key.
	 * @param string $scope The item type for itemscope.
	 */
	var $attr = '';
	
	if(!empty($prop)) {
		$attr .= ' itemprop="' . esc_attr($prop) . '" ';
	}
	if(!empty($scope)) {
		$url = 'http://bib.schema.org/' . esc_attr($scope);
		$attr .= ' itemscope itemtype="' . esc_attr($scope) . '" ';
	}
	return $attr;
}

function schema_MetaTag($key, $value) {
	/**
	 * Quickly and safely print a Schema <meta> tag.
	 *
	 * Should only need to be used for details that
	 * cannot be expressed in a single tag.
	 *
	 * @since 0.0.1
	 *
	 * @param string $key The itemprop key.
	 * @param string $value The itemprop value.
	 */
	if(empty($key) OR empty($value)) return;
	
	var $attr = '<meta itemprop="' . esc_attr($key) . '" content="' . esc_attr($value) . '" />';
	return $attr;
}