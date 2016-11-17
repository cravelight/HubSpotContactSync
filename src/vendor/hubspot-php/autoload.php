<?php

// !! Generated by: /Users/mark/.composer/vendor/bin/generate-autoload hubspot-php/autoload.php

spl_autoload_register(function ($class) {
    static $hubspot_php_map = array (
  'SevenShores\\Hubspot\\Exceptions\\BadRequest' => 'src/Exceptions/BadRequest.php',
  'SevenShores\\Hubspot\\Exceptions\\HubspotException' => 'src/Exceptions/HubSpotException.php',
  'SevenShores\\Hubspot\\Exceptions\\InvalidArgument' => 'src/Exceptions/InvalidArgument.php',
  'SevenShores\\Hubspot\\Factory' => 'src/Factory.php',
  'SevenShores\\Hubspot\\Http\\Client' => 'src/Http/Client.php',
  'SevenShores\\Hubspot\\Http\\Response' => 'src/Http/Response.php',
  'SevenShores\\Hubspot\\Resources\\BlogAuthors' => 'src/Resources/BlogAuthors.php',
  'SevenShores\\Hubspot\\Resources\\BlogPosts' => 'src/Resources/BlogPosts.php',
  'SevenShores\\Hubspot\\Resources\\BlogTopics' => 'src/Resources/BlogTopics.php',
  'SevenShores\\Hubspot\\Resources\\Blogs' => 'src/Resources/Blogs.php',
  'SevenShores\\Hubspot\\Resources\\Companies' => 'src/Resources/Companies.php',
  'SevenShores\\Hubspot\\Resources\\CompanyProperties' => 'src/Resources/CompanyProperties.php',
  'SevenShores\\Hubspot\\Resources\\ContactLists' => 'src/Resources/ContactLists.php',
  'SevenShores\\Hubspot\\Resources\\ContactProperties' => 'src/Resources/ContactProperties.php',
  'SevenShores\\Hubspot\\Resources\\Contacts' => 'src/Resources/Contacts.php',
  'SevenShores\\Hubspot\\Resources\\DealProperties' => 'src/Resources/DealProperties.php',
  'SevenShores\\Hubspot\\Resources\\Deals' => 'src/Resources/Deals.php',
  'SevenShores\\Hubspot\\Resources\\Email' => 'src/Resources/Email.php',
  'SevenShores\\Hubspot\\Resources\\EmailEvents' => 'src/Resources/EmailEvents.php',
  'SevenShores\\Hubspot\\Resources\\Engagements' => 'src/Resources/Engagements.php',
  'SevenShores\\Hubspot\\Resources\\Events' => 'src/Resources/Events.php',
  'SevenShores\\Hubspot\\Resources\\Files' => 'src/Resources/Files.php',
  'SevenShores\\Hubspot\\Resources\\Forms' => 'src/Resources/Forms.php',
  'SevenShores\\Hubspot\\Resources\\Keywords' => 'src/Resources/Keywords.php',
  'SevenShores\\Hubspot\\Resources\\Owners' => 'src/Resources/Owners.php',
  'SevenShores\\Hubspot\\Resources\\Pages' => 'src/Resources/Pages.php',
  'SevenShores\\Hubspot\\Resources\\Resource' => 'src/Resources/Resource.php',
  'SevenShores\\Hubspot\\Resources\\SingleEmail' => 'src/Resources/SingleEmail.php',
  'SevenShores\\Hubspot\\Resources\\SocialMedia' => 'src/Resources/SocialMedia.php',
  'SevenShores\\Hubspot\\Resources\\Timeline' => 'src/Resources/Timeline.php',
  'SevenShores\\Hubspot\\Resources\\Webhooks' => 'src/Resources/Webhooks.php',
  'SevenShores\\Hubspot\\Resources\\Workflows' => 'src/Resources/Workflows.php',
);

    if (isset($hubspot_php_map[$class]))
        require_once __DIR__ . "/{$hubspot_php_map[$class]}";
}, true, false);

require_once __DIR__ . '/src/helpers.php';

