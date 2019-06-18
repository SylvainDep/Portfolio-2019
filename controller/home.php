<?php

namespace Controller;

require_once './vendor/autoload.php';

class Home
{
  public function __construct()
  {
    $loader = new \Twig\Loader\FilesystemLoader('./view');
    $twig = new \Twig_Environment($loader);

    $slides = [];

    $slides[] = array(
      'timespan' => 'november 2014 - february 2019',
      'position' => 'French market Allrounder',
      'company' => 'Jimdo',
      'image' => 'hamburg.png',
      'city' => 'Hamburg',
      'country' => 'Germany',
      'tasks' => array(
        'Multilingual support through email, chat and Facebook, in English and French',
        'Original Writing and Translation of advanced help resources',
        'Original Writing of landing pages with focus on conversion',
        'Search Engine Optimization (SEO) in French, on landing pages and help center',
        'Tutorial videos production, publication and maintenance on Youtube',
        'Introduction to template fixing with Node.js, Gulp and Git',
        'Agile and Kanban work environment'
      )
    );

    $slides[] = array(
      'timespan' => '2018 (whole year)',
      'position' => 'Graduation as Junior Web Developper',
      'company' => 'OpenClassrooms',
      'image' => 'online.png',
      'city' => 'Online',
      'country' => 'company based in France',
      'tasks' => array(
        'Grade delivered by the  3W Academy (NSF 326t) Level III(FR) 5 (Eu)',
        'Conceptualizing and developping 5 projects, each one focusing on specific web technologies',
        'Technologies on application : HTML/CSS, Javascript, PHP and Worpress',
        'Introduction to Git, and Frameworks such as Symfony, React, Angular...',
        'Application of MVC structure, focus on a clean and readable code'
      )
    );

    $slides[] = array(
      'timespan' => 'September 2011 - September 2013',
      'position' => 'Train station Manager Assistant',
      'company' => 'SNCF',
      'image' => 'paris.png',
      'city' => 'Paris',
      'country' => 'France',
      'tasks' => array(
        'POS material structuring, positionning and optimizing',
        'Reception, orientation and global information in direct contact with multilingual clientele',
        'Feeding the regional network blog (information about the traffic, commercial offers, etc.)',
        'Online after-sales services',
        '<b>Lead project:</b> Modernizing and optimizing a key parisian station (Paris Austerlitz) signage, using new technologies'
      )
    );

    $slides[] = array(
      'timespan' => 'September 2011 - August 2013',
      'position' => 'Bachelor in (Online-) Store Management',
      'company' => 'IFCV Levallois-Perret',
      'image' => 'paris.png',
      'city' => 'Levallois-Perret',
      'country' => 'France',
      'tasks' => array(
        'Sandwich course training, realised along at the SNCF',
        'Managing offers/products with focus on clientele analysis',
        'Project and resources management',
        'Team work, with focus on role and project management',
        '<b>Lead project:</b> Modernizing and optimizing a key parisian station (Paris Austerlitz) signage, using new technologies'
      )
    );

    $slides[] = array(
      'timespan' => 'September 2007 - October 2009',
      'position' => 'Operational Manager',
      'company' => 'Mc Donald\'s',
      'image' => 'paris.png',
      'city' => 'Plaisir',
      'country' => 'France',
      'tasks' => array(
        'Management/Trainings in Cookery and Sales areas',
        'Short-term tasks and staff planning',
        'Equipment maintenance, hygiene standards'
      )
    );

    $works = [];

    $works[] = array(
      'name' => 'Webagency',
      'picture' => 'webagency.png',
      'applied_skill' => array(
        'Development'
      ),
      'categories' => array(
        'dev'
      )
    );

    $works[] = array(
      'name' => 'OT Strasbourg',
      'picture' => 'ot_strasbourg.png',
      'applied_skill' => array(
        'Development',
        'Wordpress'
      ),
      'categories' => array(
        'content',
        'dev'
      )
    );

    $works[] = array(
      'name' => 'Velo\'V',
      'picture' => 'velov.png',
      'applied_skill' => array(
        'Development',
        'Javascript',
        'Design'
      ),
      'categories' => array(
        'dev'
      )
    );

    $works[] = array(
      'name' => 'Jimdo Helpcenter',
      'picture' => 'jimdo_helpcenter.png',
      'applied_skill' => array(
        'Development',
        'Redaction',
        'SEO'
      ),
      'categories' => array(
        'content',
        'dev'
      )
    );

    $works[] = array(
      'name' => 'Jimdo',
      'picture' => 'jimdo.png',
      'applied_skill' => array(
        'Development',
        'Redaction',
        'Design',
        'SEO'
      ),
      'categories' => array(
        'seo',
        'content'
      )
    );

    echo $twig->render('main.twig', array(
      'slides' => $slides,
      'works' => $works
    ));
  }
}
