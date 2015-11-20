<?php

/**
 * Template Name: Cocktail Types
 *
 * Description: An archive listing a few posts from each term in the Cocktail Type taxonomy
 *
 */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
// Get the terms from the event_type post
$context['types'] = Timber::get_terms('event_type');

Timber::render( array( 'page-cocktail-types.twig', 'page.twig' ), $context );