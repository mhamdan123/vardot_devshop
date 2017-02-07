<?php 


$options['db_type'] = 'mysql';
$options['db_host'] = 'localhost';
$options['db_port'] = '3306';
$options['db_passwd'] = '7nHjHM859R';
$options['db_name'] = 'srv01devcloudvar';
$options['db_user'] = 'srv01devcloudvar';
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '7.54',
      'description' => 'This platform is running Drupal 7.54',
    ),
  ),
  'profiles' => 
  array (
    'devmaster' => 
    array (
      'name' => 'devmaster',
      'info' => 
      array (
        'name' => 'OpenDevShop DevMaster',
        'description' => 'Web interface for OpenDevShop.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'block',
          1 => 'help',
          2 => 'menu',
          3 => 'node',
          4 => 'system',
          5 => 'user',
          6 => 'update',
          7 => 'hosting',
          8 => 'hosting_task',
          9 => 'hosting_client',
          10 => 'hosting_db_server',
          11 => 'hosting_site',
          12 => 'hosting_package',
          13 => 'hosting_platform',
          14 => 'hosting_web_server',
          15 => 'hosting_server',
          16 => 'hosting_clone',
          17 => 'hosting_cron',
          18 => 'hosting_migrate',
          19 => 'hosting_alias',
          20 => 'hosting_queued',
          21 => 'hosting_http_basic_auth',
          22 => 'hosting_sync',
          23 => 'hosting_filemanager',
          24 => 'hosting_logs',
          25 => 'hosting_ssl',
          26 => 'hosting_tasks_extra',
          27 => 'hosting_backup_queue',
          28 => 'hosting_site_backup_manager',
          29 => 'admin_menu',
          30 => 'admin_menu_toolbar',
          31 => 'betterlogin',
          32 => 'views',
          33 => 'views_bulk_operations',
          34 => 'actions_permissions',
          35 => 'r4032login',
          36 => 'jquery_update',
          37 => 'distro_update',
          38 => 'module_filter',
          39 => 'devshop_hosting',
          40 => 'devshop_dothooks',
          41 => 'devshop_projects',
          42 => 'devshop_pull',
          43 => 'devshop_github',
          44 => 'devshop_testing',
          45 => 'aegir_ssh',
          46 => 'devshop_stats',
        ),
        'version' => NULL,
        'php' => '5.2.4',
        'languages' => 
        array (
          0 => 'en',
        ),
      ),
      'filename' => './profiles/devmaster/devmaster.info',
      'version' => '7.54',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'aggregator.test',
        ),
        'configure' => 'admin/config/services/aggregator/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'aggregator.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7009',
      'weight' => '-5',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'block.test',
        ),
        'configure' => 'admin/structure/block',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables multi-user blogs.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'blog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to create and organize related content in an outline.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'book.test',
        ),
        'configure' => 'admin/content/book/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'book.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows administrators to change the color scheme of compatible themes.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'color.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'text',
        ),
        'files' => 
        array (
          0 => 'comment.module',
          1 => 'comment.test',
        ),
        'configure' => 'admin/content/comment',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'comment.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contact.test',
        ),
        'configure' => 'admin/structure/contact',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'contextual' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/contextual/contextual.module',
      'name' => 'contextual',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contextual links',
        'description' => 'Provides contextual links to perform actions related to elements on a page.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'contextual.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'dashboard' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/dashboard/dashboard.module',
      'name' => 'dashboard',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Dashboard',
        'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.54',
        'files' => 
        array (
          0 => 'dashboard.test',
        ),
        'dependencies' => 
        array (
          0 => 'block',
        ),
        'configure' => 'admin/dashboard/customize',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'dblog.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'field' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/field/field.module',
      'name' => 'field',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field',
        'description' => 'Field API to add fields to entities like nodes and users.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'field.module',
          1 => 'field.attach.inc',
          2 => 'field.info.class.inc',
          3 => 'tests/field.test',
        ),
        'dependencies' => 
        array (
          0 => 'field_sql_storage',
        ),
        'required' => true,
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'theme/field.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'field_sql_storage' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/field_sql_storage/field_sql_storage.module',
      'name' => 'field_sql_storage',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field SQL storage',
        'description' => 'Stores field data in an SQL database.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_sql_storage.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'list' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/list/list.module',
      'name' => 'list',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'List',
        'description' => 'Defines list field types. Use with Options to create selection lists.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
          1 => 'options',
        ),
        'files' => 
        array (
          0 => 'tests/list.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'number' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/number/number.module',
      'name' => 'number',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Number',
        'description' => 'Defines numeric field types.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'number.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'options' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/options/options.module',
      'name' => 'options',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Options',
        'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'options.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'text' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/field/modules/text/text.module',
      'name' => 'text',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Text',
        'description' => 'Defines simple text field types.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'text.test',
        ),
        'required' => true,
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'field_ui' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/field_ui/field_ui.module',
      'name' => 'field_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Field UI',
        'description' => 'User interface for the Field API.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'field_ui.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'file' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/file/file.module',
      'name' => 'file',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'File',
        'description' => 'Defines a file field type.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'field',
        ),
        'files' => 
        array (
          0 => 'tests/file.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7010',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Filters content in preparation for display.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'filter.test',
        ),
        'required' => true,
        'configure' => 'admin/config/content/formats',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Provides discussion forums.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'forum.test',
        ),
        'configure' => 'admin/structure/forum',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'forum.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'help.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'image' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/image/image.module',
      'name' => 'image',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Image',
        'description' => 'Provides image manipulation tools.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'file',
        ),
        'files' => 
        array (
          0 => 'image.test',
        ),
        'configure' => 'admin/config/media/image-styles',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'locale.test',
        ),
        'configure' => 'admin/config/regional/language',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'menu.test',
        ),
        'configure' => 'admin/structure/menu',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7016',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'node.module',
          1 => 'node.test',
        ),
        'required' => true,
        'configure' => 'admin/structure/types',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'node.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '7.54',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openid.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'overlay' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/overlay/overlay.module',
      'name' => 'overlay',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay',
        'description' => 'Displays the Drupal administration interface in an overlay.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'path.test',
        ),
        'configure' => 'admin/config/search/path',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'php.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'poll.test',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'poll.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'rdf' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/rdf/rdf.module',
      'name' => 'rdf',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'RDF',
        'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'rdf.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'search.extender.inc',
          1 => 'search.test',
        ),
        'configure' => 'admin/config/search/settings',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'search.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'shortcut' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/shortcut/shortcut.module',
      'name' => 'shortcut',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Shortcut',
        'description' => 'Allows users to manage customizable lists of shortcut links.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'shortcut.test',
        ),
        'configure' => 'admin/config/user-interface/shortcut',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'simpletest' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/simpletest/simpletest.module',
      'name' => 'simpletest',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Testing',
        'description' => 'Provides a framework for unit and functional testing.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'simpletest.test',
          1 => 'drupal_web_test_case.php',
          2 => 'tests/actions.test',
          3 => 'tests/ajax.test',
          4 => 'tests/batch.test',
          5 => 'tests/boot.test',
          6 => 'tests/bootstrap.test',
          7 => 'tests/cache.test',
          8 => 'tests/common.test',
          9 => 'tests/database_test.test',
          10 => 'tests/entity_crud.test',
          11 => 'tests/entity_crud_hook_test.test',
          12 => 'tests/entity_query.test',
          13 => 'tests/error.test',
          14 => 'tests/file.test',
          15 => 'tests/filetransfer.test',
          16 => 'tests/form.test',
          17 => 'tests/graph.test',
          18 => 'tests/image.test',
          19 => 'tests/lock.test',
          20 => 'tests/mail.test',
          21 => 'tests/menu.test',
          22 => 'tests/module.test',
          23 => 'tests/pager.test',
          24 => 'tests/password.test',
          25 => 'tests/path.test',
          26 => 'tests/registry.test',
          27 => 'tests/schema.test',
          28 => 'tests/session.test',
          29 => 'tests/tablesort.test',
          30 => 'tests/theme.test',
          31 => 'tests/unicode.test',
          32 => 'tests/update.test',
          33 => 'tests/xmlrpc.test',
          34 => 'tests/upgrade/upgrade.test',
          35 => 'tests/upgrade/upgrade.comment.test',
          36 => 'tests/upgrade/upgrade.filter.test',
          37 => 'tests/upgrade/upgrade.forum.test',
          38 => 'tests/upgrade/upgrade.locale.test',
          39 => 'tests/upgrade/upgrade.menu.test',
          40 => 'tests/upgrade/upgrade.node.test',
          41 => 'tests/upgrade/upgrade.taxonomy.test',
          42 => 'tests/upgrade/upgrade.trigger.test',
          43 => 'tests/upgrade/upgrade.translatable.test',
          44 => 'tests/upgrade/upgrade.upload.test',
          45 => 'tests/upgrade/upgrade.user.test',
          46 => 'tests/upgrade/update.aggregator.test',
          47 => 'tests/upgrade/update.trigger.test',
          48 => 'tests/upgrade/update.field.test',
          49 => 'tests/upgrade/update.user.test',
        ),
        'configure' => 'admin/config/development/testing/settings',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'statistics.test',
        ),
        'configure' => 'admin/config/system/statistics',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'syslog.test',
        ),
        'configure' => 'admin/config/development/logging',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '1',
      'schema_version' => '7081',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'system.archiver.inc',
          1 => 'system.mail.inc',
          2 => 'system.queue.inc',
          3 => 'system.tar.inc',
          4 => 'system.updater.inc',
          5 => 'system.test',
        ),
        'required' => true,
        'configure' => 'admin/config/system',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'options',
        ),
        'files' => 
        array (
          0 => 'taxonomy.module',
          1 => 'taxonomy.test',
        ),
        'configure' => 'admin/structure/taxonomy',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'toolbar' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/toolbar/toolbar.module',
      'name' => 'toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Toolbar',
        'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
        'core' => '7.x',
        'package' => 'Core',
        'version' => '7.54',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent content for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'tracker.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'translation.test',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'trigger.test',
        ),
        'configure' => 'admin/structure/trigger',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update manager',
        'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
        'version' => '7.54',
        'package' => 'Core',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'update.test',
        ),
        'configure' => 'admin/reports/updates/settings',
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7019',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'user.module',
          1 => 'user.test',
        ),
        'required' => true,
        'configure' => 'admin/config/people',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'user.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'aegir_ansible_inventory' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_ansible/aegir_ansible_inventory/aegir_ansible_inventory.module',
      'name' => 'aegir_ansible_inventory',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Ansible Inventory',
        'package' => 'Aegir Ansible',
        'description' => 'Ansible Dynamic Inventory endpoint for aegir servers.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'version' => '7.x-1.0-alpha1+69-dev',
        'project' => 'aegir_ansible',
        'datestamp' => '1468171145',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha1+69-dev',
    ),
    'ansible_playbooks' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_ansible/ansible_playbooks/ansible_playbooks.module',
      'name' => 'ansible_playbooks',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Ansible Playbooks',
        'description' => 'Run ansible playbooks on your servers.',
        'package' => 'Aegir Ansible',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-alpha1+69-dev',
        'project' => 'aegir_ansible',
        'datestamp' => '1468171145',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha1+69-dev',
    ),
    'ansible_roles' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_ansible/ansible_roles/ansible_roles.module',
      'name' => 'ansible_roles',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Ansible Roles',
        'description' => 'Manage your servers with Ansible Roles',
        'package' => 'Aegir Ansible',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'src/hostingService_ansible_roles_custom.php',
        ),
        'version' => '7.x-1.0-alpha1+69-dev',
        'project' => 'aegir_ansible',
        'datestamp' => '1468171145',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha1+69-dev',
    ),
    'ansible_services' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_ansible/ansible_services/ansible_services.module',
      'name' => 'ansible_services',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Ansible Services',
        'description' => 'Provision Apache and MySQL with Ansible.',
        'package' => 'Aegir Ansible',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'src/hostingService_db_ansible_mysql.php',
          1 => 'src/hostingService_http_ansible_apache.php',
          2 => 'src/hostingService_http_ansible_nginx.php',
          3 => 'src/hostingService_http_ansible_haproxy.php',
        ),
        'version' => '7.x-1.0-alpha1+69-dev',
        'project' => 'aegir_ansible',
        'datestamp' => '1468171145',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha1+69-dev',
    ),
    'ansible_variables' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_ansible/ansible_variables/ansible_variables.module',
      'name' => 'ansible_variables',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Ansible Variables',
        'description' => 'Stores extra ansible variables for servers.',
        'package' => 'Aegir Ansible',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'core' => '7.x',
        'version' => '7.x-1.0-alpha1+69-dev',
        'project' => 'aegir_ansible',
        'datestamp' => '1468171145',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-alpha1+69-dev',
    ),
    'aegir_cloud' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_cloud/aegir_cloud.module',
      'name' => 'aegir_cloud',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Cloud',
        'description' => 'Connects to cloud hosting providers to provision servers for use with Aegir.',
        'core' => '7.x',
        'package' => 'Aegir Cloud',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'aegir_cloud',
        'datestamp' => '1469212158',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'aegir_digitalocean' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_cloud/providers/digitalocean/aegir_digitalocean.module',
      'name' => 'aegir_digitalocean',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Cloud: DigitalOcean',
        'description' => 'Launches servers on DigitalOcean.',
        'core' => '7.x',
        'package' => 'Aegir Cloud',
        'dependencies' => 
        array (
          0 => 'aegir_cloud',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'aegir_cloud',
        'datestamp' => '1469212158',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'aegir_softlayer' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_cloud/providers/softlayer/aegir_softlayer.module',
      'name' => 'aegir_softlayer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Cloud: SoftLayer',
        'description' => 'Launches servers in softlayer.',
        'core' => '7.x',
        'package' => 'Aegir Cloud',
        'dependencies' => 
        array (
          0 => 'aegir_cloud',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'aegir_cloud',
        'datestamp' => '1469212158',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'aegir_config' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_config/aegir_config.module',
      'name' => 'aegir_config',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Config Management',
        'description' => 'Tools for managing Drupal 8 config with Aegir.',
        'package' => 'DevShop',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-1.x-dev',
        'project' => 'aegir_config',
        'datestamp' => '1461008494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'aegir_features' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_config/aegir_features/aegir_features.module',
      'name' => 'aegir_features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Features',
        'description' => 'Tools for managing the Drupal Features.module.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'aegir_config',
        'datestamp' => '1461008494',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'aegir_ssh' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/aegir_ssh/aegir_ssh.module',
      'name' => 'aegir_ssh',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir SSH',
        'description' => 'Allows users to upload their SSH keys to Hostmaster to get access to server_master.',
        'core' => '7.x',
        'package' => 'Aegir',
        'dependencies' => 
        array (
          0 => 'sshkey',
        ),
        'version' => '7.x-0.3',
        'project' => 'aegir_ssh',
        'datestamp' => '1439904843',
        'php' => '5.2.4',
      ),
      'version' => '7.x-0.3',
    ),
    'hosting_alias' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/alias/hosting_alias.module',
      'name' => 'hosting_alias',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6204',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site aliases',
        'description' => 'Maintain domain aliases for sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_client' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/client/hosting_client.module',
      'name' => 'hosting_client',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client',
        'description' => 'Allow Hostmaster to configure clients.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_client.access.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_clone' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/clone/hosting_clone.module',
      'name' => 'hosting_clone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site cloning',
        'description' => 'Clone sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_migrate',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_cron' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/cron/hosting_cron.module',
      'name' => 'hosting_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Cron',
        'description' => 'Allow the hosting system to cron all the installed sites on a schedule.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_db_server' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/db_server/hosting_db_server.module',
      'name' => 'hosting_db_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Server',
        'description' => 'Allow Hostmaster to configure database servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_db_server.service.inc',
          1 => 'hosting_db_server_handler_filter_db_server_type.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_example' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/example/example_service/hosting_example.module',
      'name' => 'hosting_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting example',
        'description' => 'Contains example implementations of the Hosting API.',
        'package' => 'Hosting Examples',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_example.service.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_server_data' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/example/server_data/hosting_server_data.module',
      'name' => 'hosting_server_data',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'server_data',
        'description' => 'Example implementation of saving data into a server context.',
        'package' => 'Hosting Examples',
        'dependencies' => 
        array (
          0 => 'hosting_server',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_site_data' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/example/site_data/hosting_site_data.module',
      'name' => 'hosting_site_data',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'site_data',
        'description' => 'Example implementation of saving data into a site context.',
        'package' => 'Hosting Examples',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/hosting.module',
      'name' => 'hosting',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting',
        'description' => 'Allow this Drupal site to deploy hosted sites.',
        'package' => 'Hosting',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'views',
          1 => 'views_bulk_operations',
        ),
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_field_handler_interval.inc',
          1 => 'includes/views/handlers/hosting_field_handler_status.inc',
          2 => 'hosting.test',
        ),
        'configure' => 'admin/hosting',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_migrate' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/migrate/hosting_migrate.module',
      'name' => 'hosting_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site migration',
        'description' => 'Migrate sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_site',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_migrate.batch.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_package' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/package/hosting_package.module',
      'name' => 'hosting_package',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Package management',
        'description' => 'Allow Hostmaster to keep track which packages have been installed.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_package_handler_field_site_count.inc',
          1 => 'includes/views/handlers/hosting_package_handler_field_status.inc',
          2 => 'includes/views/handlers/hosting_package_handler_filter_status.inc',
          3 => 'includes/views/handlers/hosting_package_handler_filter_type.inc',
          4 => 'includes/views/handlers/hosting_package_handler_sort_site_count.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_platform' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/platform/hosting_platform.module',
      'name' => 'hosting_platform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6208',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Platforms',
        'description' => 'Allow Hostmaster to keep track of multiple instances of Drupal.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_package',
        ),
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_platform_handler_field_release.inc',
          1 => 'includes/views/handlers/hosting_platform_handler_field_sites.inc',
          2 => 'includes/views/handlers/hosting_platform_handler_field_status.inc',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_queued' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/queued/hosting_queued.module',
      'name' => 'hosting_queued',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting queue daemon',
        'description' => 'Allows the hosting queue to be run in a daemon.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_quota' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/quota/hosting_quota.module',
      'name' => 'hosting_quota',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client Quota',
        'description' => 'Allow Hostmaster to configure quotas.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_client',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_server' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/server/hosting_server.module',
      'name' => 'hosting_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Server',
        'description' => 'Allow hostmaster to configure servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_server.service.inc',
          1 => 'hosting_server.test',
          2 => 'includes/views/handlers/hosting_server_handler_field_services.inc',
          3 => 'includes/views/handlers/hosting_server_handler_field_human_name.inc',
          4 => 'includes/views/handlers/hosting_server_handler_field_status.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_signup' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/signup/hosting_signup.module',
      'name' => 'hosting_signup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Signup form',
        'description' => 'A simple signup form that allows users to sign up for a new site.',
        'package' => 'Hosting',
        'core' => '7.x',
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_site' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/site/hosting_site.module',
      'name' => 'hosting_site',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7301',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Sites',
        'description' => 'Allow Aegir to manage of hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_client',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_site_handler_field_language.inc',
          1 => 'includes/views/handlers/hosting_site_handler_field_status.inc',
          2 => 'includes/views/plugins/hosting_site_plugin_access.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_subdirs' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/subdirs/hosting_subdirs.module',
      'name' => 'hosting_subdirs',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Subdirectories',
        'description' => 'Allow hostmaster to install sites in subdirectories.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_alias',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting.feature.subdirs.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_task' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/task/hosting_task.module',
      'name' => 'hosting_task',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting tasks',
        'description' => 'Allow Hostmaster to keep track of tasks that have been processed on the servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'includes/views/handlers/hosting_task_handler_field_status.inc',
          1 => 'includes/views/handlers/hosting_task_handler_filter_type.inc',
          2 => 'includes/views/handlers/hosting_task_handler_filter_status.inc',
          3 => 'includes/views/handlers/hosting_task_handler_sort_default.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_task_gc' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/task_gc/hosting_task_gc.module',
      'name' => 'hosting_task_gc',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting task garbage collection',
        'description' => 'Removes old tasks and task logs.',
        'core' => '7.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_web_cluster' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/web_cluster/hosting_web_cluster.module',
      'name' => 'hosting_web_cluster',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Cluster',
        'description' => 'Allow hostmaster to configure web clusters.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_web_cluster.service.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_web_pack' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/web_pack/hosting_web_pack.module',
      'name' => 'hosting_web_pack',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Pack',
        'description' => 'Allow hostmaster to configure web "packs", which have masters and slaves.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_web_pack.service.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_web_server' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/web_server/hosting_web_server.module',
      'name' => 'hosting_web_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Server',
        'description' => 'Allow hostmaster to configure web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_web_server.service.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_nginx' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/web_server/nginx/hosting_nginx.module',
      'name' => 'hosting_nginx',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx servers',
        'description' => 'Allow hostmaster to configure NGINX web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_nginx.service.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_nginx_ssl' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
      'name' => 'hosting_nginx_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx +SSL servers',
        'description' => 'Allow hostmaster to configure NGINX web servers with SSL support.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
          1 => 'hosting_ssl',
          2 => 'hosting_nginx',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_nginx_ssl.service.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_ssl' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting/web_server/ssl/hosting_ssl.module',
      'name' => 'hosting_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SSL support',
        'description' => 'Allow hostmaster to configure web servers with SSL support',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_web_server',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'hosting_ssl.service.inc',
        ),
        'version' => '7.x-3.8-devshop-dev',
        'project' => 'hosting',
        'datestamp' => '1486302453',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8-devshop-dev',
    ),
    'hosting_filemanager' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_filemanager/hosting_filemanager.module',
      'name' => 'hosting_filemanager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Filemanager',
        'description' => 'File manager for aegir sites.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'hosting_filemanager',
        'datestamp' => '1409282929',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'hosting_git_checkout' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_git/checkout/hosting_git_checkout.module',
      'name' => 'hosting_git_checkout',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Git checkout tasks',
        'description' => 'Allows access to the checkout task',
        'package' => 'Aegir Git',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_git',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'hosting_git',
        'datestamp' => '1477589393',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_git' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_git/hosting_git.module',
      'name' => 'hosting_git',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Git integration',
        'description' => 'Allows Hostmaster managed sites and platforms to use Git.',
        'package' => 'Aegir Git',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'hosting_git',
        'datestamp' => '1477589393',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_git_pull' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_git/pull/hosting_git_pull.module',
      'name' => 'hosting_git_pull',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7300',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Git pull tasks',
        'description' => 'Allows access to the pull task',
        'package' => 'Aegir Git',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_git',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'hosting_git',
        'datestamp' => '1477589393',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_logs' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_logs/hosting_logs.module',
      'name' => 'hosting_logs',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Logs',
        'description' => 'Provides a site\'s error and watchdog logs to hostmaster front end.',
        'core' => '7.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => '7.x-3.1',
        'project' => 'hosting_logs',
        'datestamp' => '1465688340',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'hosting_logs_git' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_logs/hosting_logs_git/hosting_logs_git.module',
      'name' => 'hosting_logs_git',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Logs Git',
        'description' => 'Provides a site or platforms Git commit log to hostmaster front end.',
        'core' => '7.x',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_logs',
        ),
        'version' => '7.x-3.1',
        'project' => 'hosting_logs',
        'datestamp' => '1465688340',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.1',
    ),
    'hosting_remote_import' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_remote_import/hosting_remote_import.module',
      'name' => 'hosting_remote_import',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting remote import',
        'description' => 'Helps to import sites from remote Hostmasters',
        'core' => '7.x',
        'package' => 'Hosting',
        'files' => 
        array (
          0 => 'hosting_remote_import.service.inc',
        ),
        'version' => '7.x-3.9',
        'project' => 'hosting_remote_import',
        'datestamp' => '1483645777',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'hosting_backup_queue' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_site_backup_manager/hosting_backup_queue/hosting_backup_queue.module',
      'name' => 'hosting_backup_queue',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup queue',
        'description' => 'Allows hourly/daily/weekly scheduled backups of Aegir sites.',
        'core' => '7.x',
        'package' => 'Aegir Backup',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_site_backup_manager',
        ),
        'version' => '7.x-3.8',
        'project' => 'hosting_site_backup_manager',
        'datestamp' => '1477589402',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_backup_window' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_site_backup_manager/hosting_backup_window/hosting_backup_window.module',
      'name' => 'hosting_backup_window',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Backup window',
        'description' => 'Allows restricting the backup queue to only run at certain times',
        'core' => '7.x',
        'package' => 'Aegir Backup',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_site_backup_manager',
          2 => 'hosting_backup_queue',
        ),
        'version' => '7.x-3.8',
        'project' => 'hosting_site_backup_manager',
        'datestamp' => '1477589402',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_site_backup_manager' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_site_backup_manager/hosting_site_backup_manager.module',
      'name' => 'hosting_site_backup_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Site Backup Manager',
        'description' => 'Provides a user interface to manage site backups.',
        'package' => 'Aegir Backup',
        'dependencies' => 
        array (
          0 => 'hosting_site',
          1 => 'hosting_task',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'hosting_site_backup_manager',
        'datestamp' => '1477589402',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_drush_alias' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_tasks_extra/hosting_drush_alias/hosting_drush_alias.module',
      'name' => 'hosting_drush_alias',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Drush Alias',
        'description' => 'Generates drush aliases for sites.',
        'package' => 'Aegir Extras',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'hosting_tasks_extra',
        'datestamp' => '1477589408',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_sync' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_tasks_extra/hosting_sync/hosting_sync.module',
      'name' => 'hosting_sync',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Sync',
        'description' => 'Allows database and files to be synchronized between Aegir sites (frontend).',
        'core' => '7.x',
        'package' => 'Aegir Extras',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'version' => '7.x-3.8',
        'project' => 'hosting_tasks_extra',
        'datestamp' => '1477589408',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_tasks_extra' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_tasks_extra/hosting_tasks_extra.module',
      'name' => 'hosting_tasks_extra',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting tasks extra',
        'description' => 'Adds additional tasks to Aegir.',
        'package' => 'Aegir Extras',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'hosting_tasks_extra',
        'datestamp' => '1477589408',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'hosting_http_basic_auth' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/aegir/hosting_tasks_extra/http_basic_auth/hosting_http_basic_auth.module',
      'name' => 'hosting_http_basic_auth',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6100',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'HTTP Basic Authentication',
        'description' => 'Allows admins to specify HTTP basic authentication for sites.',
        'package' => 'Aegir Extras',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '7.x',
        'version' => '7.x-3.8',
        'project' => 'hosting_tasks_extra',
        'datestamp' => '1477589408',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'adminrole' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/adminrole/adminrole.module',
      'name' => 'adminrole',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Admin Role',
        'description' => 'Automatically assign all permissions to an admin role.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-1.1',
        'project' => 'adminrole',
        'datestamp' => '1448993658',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.1',
    ),
    'admin_devel' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/admin_menu/admin_devel/admin_devel.module',
      'name' => 'admin_devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration Development tools',
        'description' => 'Administration and debugging functionality for developers and site builders.',
        'package' => 'Administration',
        'core' => '7.x',
        'scripts' => 
        array (
          0 => 'admin_devel.js',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7304',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '7.x',
        'configure' => 'admin/config/administration/admin_menu',
        'dependencies' => 
        array (
          0 => 'system (>7.10)',
        ),
        'files' => 
        array (
          0 => 'tests/admin_menu.test',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'admin_menu_toolbar' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
      'name' => 'admin_menu_toolbar',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6300',
      'weight' => '101',
      'info' => 
      array (
        'name' => 'Administration menu Toolbar style',
        'description' => 'A better Toolbar.',
        'package' => 'Administration',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'admin_menu',
        ),
        'version' => '7.x-3.0-rc5',
        'project' => 'admin_menu',
        'datestamp' => '1419029284',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-rc5',
    ),
    'betterlogin' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/betterlogin/betterlogin.module',
      'name' => 'betterlogin',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Better Login',
        'description' => 'Make the login screens better :)',
        'package' => 'User interface',
        'core' => '7.x',
        'version' => '7.x-1.4',
        'project' => 'betterlogin',
        'datestamp' => '1438155243',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.4',
    ),
    'bulk_export' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/bulk_export/bulk_export.module',
      'name' => 'bulk_export',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bulk Export',
        'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools.module',
      'name' => 'ctools',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos tools',
        'description' => 'A library of helpful tools by Merlin of Chaos.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'files' => 
        array (
          0 => 'includes/context.inc',
          1 => 'includes/css-cache.inc',
          2 => 'includes/math-expr.inc',
          3 => 'includes/stylizer.inc',
          4 => 'tests/css_cache.test',
        ),
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_access_ruleset' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
      'name' => 'ctools_access_ruleset',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom rulesets',
        'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_ajax_sample' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
      'name' => 'ctools_ajax_sample',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) AJAX Example',
        'description' => 'Shows how to use the power of Chaos AJAX.',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_custom_content' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_custom_content/ctools_custom_content.module',
      'name' => 'ctools_custom_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Custom content panes',
        'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'ctools_plugin_example' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/ctools_plugin_example/ctools_plugin_example.module',
      'name' => 'ctools_plugin_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chaos Tools (CTools) Plugin Example',
        'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'panels',
          2 => 'page_manager',
          3 => 'advanced_help',
        ),
        'core' => '7.x',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'page_manager' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/page_manager/page_manager.module',
      'name' => 'page_manager',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Page manager',
        'description' => 'Provides a UI and API to manage pages within the site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'stylizer' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/stylizer/stylizer.module',
      'name' => 'stylizer',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stylizer',
        'description' => 'Create custom styles for applications such as Panels.',
        'core' => '7.x',
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'color',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'term_depth' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/term_depth/term_depth.module',
      'name' => 'term_depth',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Term Depth access',
        'description' => 'Controls access to context based upon term depth',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'package' => 'Chaos tool suite',
        'version' => '7.x-1.11',
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'views_content' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/ctools/views_content/views_content.module',
      'name' => 'views_content',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views content panes',
        'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
        'package' => 'Chaos tool suite',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'views',
        ),
        'core' => '7.x',
        'version' => '7.x-1.11',
        'files' => 
        array (
          0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
          1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
          2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
        ),
        'project' => 'ctools',
        'datestamp' => '1476581654',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.11',
    ),
    'devel' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/devel/devel.module',
      'name' => 'devel',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel',
        'description' => 'Various blocks, pages, and functions for developers.',
        'package' => 'Development',
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'files' => 
        array (
          0 => 'devel.test',
          1 => 'devel.mail.inc',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_generate' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/devel/devel_generate/devel_generate.module',
      'name' => 'devel_generate',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel generate',
        'description' => 'Generate dummy users, nodes, and taxonomy terms.',
        'package' => 'Development',
        'core' => '7.x',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'configure' => 'admin/config/development/generate',
        'files' => 
        array (
          0 => 'devel_generate.test',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devel_node_access' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/devel/devel_node_access.module',
      'name' => 'devel_node_access',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Devel node access',
        'description' => 'Developer blocks and page illustrating relevant node_access records.',
        'package' => 'Development',
        'dependencies' => 
        array (
          0 => 'menu',
        ),
        'core' => '7.x',
        'configure' => 'admin/config/development/devel',
        'tags' => 
        array (
          0 => 'developer',
        ),
        'version' => '7.x-1.5',
        'project' => 'devel',
        'datestamp' => '1398963366',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.5',
    ),
    'devshop_stats' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/devshop_stats/devshop_stats.module',
      'name' => 'devshop_stats',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DevShop Stats',
        'description' => 'Provides usage statistics for OpenDevShop on Drupal.org',
        'core' => '7.x',
        'version' => '7.x-1.0-beta10',
        'project' => 'devshop_stats',
        'datestamp' => '1467923651',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta10',
    ),
    'distro_update' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/distro_update/distro_update.module',
      'name' => 'distro_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Distribution Update Status Manager',
        'description' => 'Provides an alternative Update Manager interface to limit status updates for modules/themes managed by a distribution\'s or module\'s .make file.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'ctools',
          1 => 'update',
        ),
        'configure' => 'admin/reports/updates/settings',
        'version' => '7.x-1.0-beta4',
        'project' => 'distro_update',
        'datestamp' => '1413825230',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0-beta4',
    ),
    'entity' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/entity/entity.module',
      'name' => 'entity',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7003',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity API',
        'description' => 'Enables modules to work with any entity type and to provide entities.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity.features.inc',
          1 => 'entity.i18n.inc',
          2 => 'entity.info.inc',
          3 => 'entity.rules.inc',
          4 => 'entity.test',
          5 => 'includes/entity.inc',
          6 => 'includes/entity.controller.inc',
          7 => 'includes/entity.ui.inc',
          8 => 'includes/entity.wrapper.inc',
          9 => 'views/entity.views.inc',
          10 => 'views/handlers/entity_views_field_handler_helper.inc',
          11 => 'views/handlers/entity_views_handler_area_entity.inc',
          12 => 'views/handlers/entity_views_handler_field_boolean.inc',
          13 => 'views/handlers/entity_views_handler_field_date.inc',
          14 => 'views/handlers/entity_views_handler_field_duration.inc',
          15 => 'views/handlers/entity_views_handler_field_entity.inc',
          16 => 'views/handlers/entity_views_handler_field_field.inc',
          17 => 'views/handlers/entity_views_handler_field_numeric.inc',
          18 => 'views/handlers/entity_views_handler_field_options.inc',
          19 => 'views/handlers/entity_views_handler_field_text.inc',
          20 => 'views/handlers/entity_views_handler_field_uri.inc',
          21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
          22 => 'views/handlers/entity_views_handler_relationship.inc',
          23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
        ),
        'version' => '7.x-1.8',
        'project' => 'entity',
        'datestamp' => '1474546503',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.8',
    ),
    'entity_token' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/entity/entity_token.module',
      'name' => 'entity_token',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Entity tokens',
        'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'entity_token.tokens.inc',
          1 => 'entity_token.module',
        ),
        'dependencies' => 
        array (
          0 => 'entity',
        ),
        'version' => '7.x-1.8',
        'project' => 'entity',
        'datestamp' => '1474546503',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.8',
    ),
    'features' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/features/features.module',
      'name' => 'features',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Features',
        'description' => 'Provides feature management for Drupal.',
        'core' => '7.x',
        'package' => 'Features',
        'files' => 
        array (
          0 => 'tests/features.test',
        ),
        'test_dependencies' => 
        array (
          0 => 'image',
          1 => 'strongarm',
          2 => 'taxonomy',
          3 => 'views',
        ),
        'configure' => 'admin/structure/features/settings',
        'version' => '7.x-2.10',
        'project' => 'features',
        'datestamp' => '1461011641',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.10',
    ),
    'intercomio' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/intercomio/intercomio.module',
      'name' => 'intercomio',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Intercom.io Integration',
        'description' => 'Integration with the intercom.io web service.',
        'core' => '7.x',
        'package' => 'Other',
        'configure' => 'admin/config/services/intercomio',
        'dependencies' => 
        array (
          0 => 'composer_manager',
        ),
        'files' => 
        array (
          0 => 'src/IntercomioController.php',
        ),
        'version' => '7.x-1.x-dev',
        'project' => 'intercomio',
        'datestamp' => '1485379686',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.x-dev',
    ),
    'jquery_update' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/jquery_update/jquery_update.module',
      'name' => 'jquery_update',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery Update',
        'description' => 'Update jQuery and jQuery UI to a more recent version.',
        'package' => 'User interface',
        'core' => '7.x',
        'configure' => 'admin/config/development/jquery_update',
        'version' => '7.x-3.0-alpha3',
        'project' => 'jquery_update',
        'datestamp' => '1445382241',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.0-alpha3',
    ),
    'libraries' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/libraries/libraries.module',
      'name' => 'libraries',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Libraries',
        'description' => 'Allows version-dependent and shared usage of external libraries.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'system (>=7.11)',
        ),
        'files' => 
        array (
          0 => 'tests/LibrariesAdminWebTest.test',
          1 => 'tests/LibrariesLoadWebTest.test',
          2 => 'tests/LibrariesUnitTest.test',
          3 => 'tests/LibrariesWebTestBase.test',
        ),
        'version' => '7.x-2.3',
        'project' => 'libraries',
        'datestamp' => '1463077450',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'module_filter' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/module_filter/module_filter.module',
      'name' => 'module_filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7201',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Module filter',
        'description' => 'Filter the modules list.',
        'core' => '7.x',
        'package' => 'Administration',
        'files' => 
        array (
          0 => 'module_filter.install',
          1 => 'module_filter.js',
          2 => 'module_filter.module',
          3 => 'module_filter.admin.inc',
          4 => 'module_filter.theme.inc',
          5 => 'css/module_filter.css',
          6 => 'css/module_filter_tab.css',
          7 => 'js/module_filter.js',
          8 => 'js/module_filter_tab.js',
        ),
        'configure' => 'admin/config/user-interface/modulefilter',
        'version' => '7.x-2.0',
        'project' => 'module_filter',
        'datestamp' => '1424631189',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'openidadmin' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/openidadmin/openidadmin.module',
      'name' => 'openidadmin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID Admin',
        'description' => 'Allows bulk operations for OpenID administration.',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'core' => '7.x',
        'files' => 
        array (
          0 => 'openidadmin.module',
        ),
        'version' => '7.x-1.0',
        'project' => 'openidadmin',
        'datestamp' => '1284569742',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.0',
    ),
    'overlay_paths' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/overlay_paths/overlay_paths.module',
      'name' => 'overlay_paths',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths',
        'description' => 'Allows other developers to define paths that should use the overlay, but not an admin theme',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay',
        ),
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'overlay_paths_example' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/overlay_paths/overlay_paths_example/overlay_paths_example.module',
      'name' => 'overlay_paths_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths - Example',
        'description' => 'A demonstration module for Overlay paths that provides a UI for setting paths that should appear in the overlay.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay_paths',
        ),
        'configure' => 'admin/config/system/overlay_paths_example',
        'hidden' => 'true',
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'overlay_paths_ui' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/overlay_paths/overlay_paths_ui/overlay_paths_ui.module',
      'name' => 'overlay_paths_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Overlay paths UI',
        'description' => 'Provides a UI for overlay paths, allow site builders to select paths that should appear in the overlay.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'overlay_paths',
        ),
        'configure' => 'admin/config/system/overlay_paths_ui',
        'version' => '7.x-1.3',
        'project' => 'overlay_paths',
        'datestamp' => '1388699909',
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.3',
    ),
    'r4032login' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/r4032login/r4032login.module',
      'name' => 'r4032login',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Redirect 403 to User Login',
        'description' => 'Redirect anonymous users from 403 Access Denied pages to the /user/login page.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'r4032login.install',
          1 => 'r4032login.module',
        ),
        'configure' => 'admin/config/system/site-information',
        'version' => '7.x-1.8',
        'project' => 'r4032login',
        'datestamp' => '1407782030',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-1.8',
    ),
    'sshkey' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/sshkey/sshkey.module',
      'name' => 'sshkey',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SSH public keys',
        'description' => 'Allows users to associated public keys with their user accounts.',
        'core' => '7.x',
        'files' => 
        array (
          0 => 'sshkey.test',
          1 => 'views/sshkey.views.inc',
          2 => 'views/sshkey_handler_field_sshkey_operations.inc',
          3 => 'views/sshkey_handler_field_sshkey_link.inc',
          4 => 'views/sshkey_handler_field_sshkey_link_edit.inc',
          5 => 'views/sshkey_handler_field_sshkey_link_delete.inc',
        ),
        'version' => '7.x-2.0',
        'project' => 'sshkey',
        'datestamp' => '1347551755',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'sshkey_blacklist' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/sshkey/sshkey_blacklist/sshkey_blacklist.module',
      'name' => 'sshkey_blacklist',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SSH key blacklist checking',
        'description' => 'Validates SSH keys using the ssh-vulnkey blacklist.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'sshkey',
        ),
        'version' => '7.x-2.0',
        'project' => 'sshkey',
        'datestamp' => '1347551755',
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.0',
    ),
    'timeago' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/timeago/timeago.module',
      'name' => 'timeago',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Timeago',
        'description' => 'Converts dynamic timetamps to a \'time ago\' format using jQuery with graceful degredation.',
        'core' => '7.x',
        'configure' => 'admin/config/user-interface/timeago',
        'files' => 
        array (
          0 => 'timeago.install',
          1 => 'timeago.module',
        ),
        'version' => '7.x-2.3',
        'project' => 'timeago',
        'datestamp' => '1415314687',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-2.3',
    ),
    'views' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views/views.module',
      'name' => 'views',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7302',
      'weight' => '10',
      'info' => 
      array (
        'name' => 'Views',
        'description' => 'Create customized lists and queries from your database.',
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/views.css',
          ),
        ),
        'dependencies' => 
        array (
          0 => 'ctools',
        ),
        'files' => 
        array (
          0 => 'handlers/views_handler_area.inc',
          1 => 'handlers/views_handler_area_messages.inc',
          2 => 'handlers/views_handler_area_result.inc',
          3 => 'handlers/views_handler_area_text.inc',
          4 => 'handlers/views_handler_area_text_custom.inc',
          5 => 'handlers/views_handler_area_view.inc',
          6 => 'handlers/views_handler_argument.inc',
          7 => 'handlers/views_handler_argument_date.inc',
          8 => 'handlers/views_handler_argument_formula.inc',
          9 => 'handlers/views_handler_argument_many_to_one.inc',
          10 => 'handlers/views_handler_argument_null.inc',
          11 => 'handlers/views_handler_argument_numeric.inc',
          12 => 'handlers/views_handler_argument_string.inc',
          13 => 'handlers/views_handler_argument_group_by_numeric.inc',
          14 => 'handlers/views_handler_field.inc',
          15 => 'handlers/views_handler_field_counter.inc',
          16 => 'handlers/views_handler_field_boolean.inc',
          17 => 'handlers/views_handler_field_contextual_links.inc',
          18 => 'handlers/views_handler_field_ctools_dropdown.inc',
          19 => 'handlers/views_handler_field_custom.inc',
          20 => 'handlers/views_handler_field_date.inc',
          21 => 'handlers/views_handler_field_entity.inc',
          22 => 'handlers/views_handler_field_links.inc',
          23 => 'handlers/views_handler_field_markup.inc',
          24 => 'handlers/views_handler_field_math.inc',
          25 => 'handlers/views_handler_field_numeric.inc',
          26 => 'handlers/views_handler_field_prerender_list.inc',
          27 => 'handlers/views_handler_field_time_interval.inc',
          28 => 'handlers/views_handler_field_serialized.inc',
          29 => 'handlers/views_handler_field_machine_name.inc',
          30 => 'handlers/views_handler_field_url.inc',
          31 => 'handlers/views_handler_filter.inc',
          32 => 'handlers/views_handler_filter_boolean_operator.inc',
          33 => 'handlers/views_handler_filter_boolean_operator_string.inc',
          34 => 'handlers/views_handler_filter_combine.inc',
          35 => 'handlers/views_handler_filter_date.inc',
          36 => 'handlers/views_handler_filter_equality.inc',
          37 => 'handlers/views_handler_filter_entity_bundle.inc',
          38 => 'handlers/views_handler_filter_group_by_numeric.inc',
          39 => 'handlers/views_handler_filter_in_operator.inc',
          40 => 'handlers/views_handler_filter_many_to_one.inc',
          41 => 'handlers/views_handler_filter_numeric.inc',
          42 => 'handlers/views_handler_filter_string.inc',
          43 => 'handlers/views_handler_filter_fields_compare.inc',
          44 => 'handlers/views_handler_relationship.inc',
          45 => 'handlers/views_handler_relationship_groupwise_max.inc',
          46 => 'handlers/views_handler_sort.inc',
          47 => 'handlers/views_handler_sort_date.inc',
          48 => 'handlers/views_handler_sort_formula.inc',
          49 => 'handlers/views_handler_sort_group_by_numeric.inc',
          50 => 'handlers/views_handler_sort_menu_hierarchy.inc',
          51 => 'handlers/views_handler_sort_random.inc',
          52 => 'includes/base.inc',
          53 => 'includes/handlers.inc',
          54 => 'includes/plugins.inc',
          55 => 'includes/view.inc',
          56 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
          57 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
          58 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
          59 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
          60 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
          61 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
          62 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
          63 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
          64 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
          65 => 'modules/book/views_plugin_argument_default_book_root.inc',
          66 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
          67 => 'modules/comment/views_handler_field_comment.inc',
          68 => 'modules/comment/views_handler_field_comment_depth.inc',
          69 => 'modules/comment/views_handler_field_comment_link.inc',
          70 => 'modules/comment/views_handler_field_comment_link_approve.inc',
          71 => 'modules/comment/views_handler_field_comment_link_delete.inc',
          72 => 'modules/comment/views_handler_field_comment_link_edit.inc',
          73 => 'modules/comment/views_handler_field_comment_link_reply.inc',
          74 => 'modules/comment/views_handler_field_comment_node_link.inc',
          75 => 'modules/comment/views_handler_field_comment_username.inc',
          76 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
          77 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
          78 => 'modules/comment/views_handler_field_node_comment.inc',
          79 => 'modules/comment/views_handler_field_node_new_comments.inc',
          80 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
          81 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
          82 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
          83 => 'modules/comment/views_handler_filter_node_comment.inc',
          84 => 'modules/comment/views_handler_sort_comment_thread.inc',
          85 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
          86 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
          87 => 'modules/comment/views_plugin_row_comment_rss.inc',
          88 => 'modules/comment/views_plugin_row_comment_view.inc',
          89 => 'modules/contact/views_handler_field_contact_link.inc',
          90 => 'modules/field/views_handler_field_field.inc',
          91 => 'modules/field/views_handler_relationship_entity_reverse.inc',
          92 => 'modules/field/views_handler_argument_field_list.inc',
          93 => 'modules/field/views_handler_filter_field_list_boolean.inc',
          94 => 'modules/field/views_handler_argument_field_list_string.inc',
          95 => 'modules/field/views_handler_filter_field_list.inc',
          96 => 'modules/filter/views_handler_field_filter_format_name.inc',
          97 => 'modules/locale/views_handler_field_node_language.inc',
          98 => 'modules/locale/views_handler_filter_node_language.inc',
          99 => 'modules/locale/views_handler_argument_locale_group.inc',
          100 => 'modules/locale/views_handler_argument_locale_language.inc',
          101 => 'modules/locale/views_handler_field_locale_group.inc',
          102 => 'modules/locale/views_handler_field_locale_language.inc',
          103 => 'modules/locale/views_handler_field_locale_link_edit.inc',
          104 => 'modules/locale/views_handler_filter_locale_group.inc',
          105 => 'modules/locale/views_handler_filter_locale_language.inc',
          106 => 'modules/locale/views_handler_filter_locale_version.inc',
          107 => 'modules/locale/views_handler_sort_node_language.inc',
          108 => 'modules/node/views_handler_argument_dates_various.inc',
          109 => 'modules/node/views_handler_argument_node_language.inc',
          110 => 'modules/node/views_handler_argument_node_nid.inc',
          111 => 'modules/node/views_handler_argument_node_type.inc',
          112 => 'modules/node/views_handler_argument_node_vid.inc',
          113 => 'modules/node/views_handler_argument_node_uid_revision.inc',
          114 => 'modules/node/views_handler_field_history_user_timestamp.inc',
          115 => 'modules/node/views_handler_field_node.inc',
          116 => 'modules/node/views_handler_field_node_link.inc',
          117 => 'modules/node/views_handler_field_node_link_delete.inc',
          118 => 'modules/node/views_handler_field_node_link_edit.inc',
          119 => 'modules/node/views_handler_field_node_revision.inc',
          120 => 'modules/node/views_handler_field_node_revision_link.inc',
          121 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
          122 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
          123 => 'modules/node/views_handler_field_node_path.inc',
          124 => 'modules/node/views_handler_field_node_type.inc',
          125 => 'modules/node/views_handler_field_node_version_count.inc',
          126 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
          127 => 'modules/node/views_handler_filter_node_access.inc',
          128 => 'modules/node/views_handler_filter_node_status.inc',
          129 => 'modules/node/views_handler_filter_node_type.inc',
          130 => 'modules/node/views_handler_filter_node_uid_revision.inc',
          131 => 'modules/node/views_handler_filter_node_version_count.inc',
          132 => 'modules/node/views_handler_sort_node_version_count.inc',
          133 => 'modules/node/views_plugin_argument_default_node.inc',
          134 => 'modules/node/views_plugin_argument_validate_node.inc',
          135 => 'modules/node/views_plugin_row_node_rss.inc',
          136 => 'modules/node/views_plugin_row_node_view.inc',
          137 => 'modules/profile/views_handler_field_profile_date.inc',
          138 => 'modules/profile/views_handler_field_profile_list.inc',
          139 => 'modules/profile/views_handler_filter_profile_selection.inc',
          140 => 'modules/search/views_handler_argument_search.inc',
          141 => 'modules/search/views_handler_field_search_score.inc',
          142 => 'modules/search/views_handler_filter_search.inc',
          143 => 'modules/search/views_handler_sort_search_score.inc',
          144 => 'modules/search/views_plugin_row_search_view.inc',
          145 => 'modules/statistics/views_handler_field_accesslog_path.inc',
          146 => 'modules/statistics/views_handler_field_node_counter_timestamp.inc',
          147 => 'modules/statistics/views_handler_field_statistics_numeric.inc',
          148 => 'modules/system/views_handler_argument_file_fid.inc',
          149 => 'modules/system/views_handler_field_file.inc',
          150 => 'modules/system/views_handler_field_file_extension.inc',
          151 => 'modules/system/views_handler_field_file_filemime.inc',
          152 => 'modules/system/views_handler_field_file_uri.inc',
          153 => 'modules/system/views_handler_field_file_status.inc',
          154 => 'modules/system/views_handler_filter_file_status.inc',
          155 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
          156 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
          157 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
          158 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_join.inc',
          159 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
          160 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
          161 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
          162 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
          163 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
          164 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
          165 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
          166 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
          167 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth_join.inc',
          168 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
          169 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
          170 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
          171 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
          172 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
          173 => 'modules/tracker/views_handler_argument_tracker_comment_user_uid.inc',
          174 => 'modules/tracker/views_handler_filter_tracker_comment_user_uid.inc',
          175 => 'modules/tracker/views_handler_filter_tracker_boolean_operator.inc',
          176 => 'modules/system/views_handler_filter_system_type.inc',
          177 => 'modules/translation/views_handler_argument_node_tnid.inc',
          178 => 'modules/translation/views_handler_field_node_link_translate.inc',
          179 => 'modules/translation/views_handler_field_node_translation_link.inc',
          180 => 'modules/translation/views_handler_filter_node_tnid.inc',
          181 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
          182 => 'modules/translation/views_handler_relationship_translation.inc',
          183 => 'modules/user/views_handler_argument_user_uid.inc',
          184 => 'modules/user/views_handler_argument_users_roles_rid.inc',
          185 => 'modules/user/views_handler_field_user.inc',
          186 => 'modules/user/views_handler_field_user_language.inc',
          187 => 'modules/user/views_handler_field_user_link.inc',
          188 => 'modules/user/views_handler_field_user_link_cancel.inc',
          189 => 'modules/user/views_handler_field_user_link_edit.inc',
          190 => 'modules/user/views_handler_field_user_mail.inc',
          191 => 'modules/user/views_handler_field_user_name.inc',
          192 => 'modules/user/views_handler_field_user_permissions.inc',
          193 => 'modules/user/views_handler_field_user_picture.inc',
          194 => 'modules/user/views_handler_field_user_roles.inc',
          195 => 'modules/user/views_handler_filter_user_current.inc',
          196 => 'modules/user/views_handler_filter_user_name.inc',
          197 => 'modules/user/views_handler_filter_user_permissions.inc',
          198 => 'modules/user/views_handler_filter_user_roles.inc',
          199 => 'modules/user/views_plugin_argument_default_current_user.inc',
          200 => 'modules/user/views_plugin_argument_default_user.inc',
          201 => 'modules/user/views_plugin_argument_validate_user.inc',
          202 => 'modules/user/views_plugin_row_user_view.inc',
          203 => 'plugins/views_plugin_access.inc',
          204 => 'plugins/views_plugin_access_none.inc',
          205 => 'plugins/views_plugin_access_perm.inc',
          206 => 'plugins/views_plugin_access_role.inc',
          207 => 'plugins/views_plugin_argument_default.inc',
          208 => 'plugins/views_plugin_argument_default_php.inc',
          209 => 'plugins/views_plugin_argument_default_fixed.inc',
          210 => 'plugins/views_plugin_argument_default_raw.inc',
          211 => 'plugins/views_plugin_argument_validate.inc',
          212 => 'plugins/views_plugin_argument_validate_numeric.inc',
          213 => 'plugins/views_plugin_argument_validate_php.inc',
          214 => 'plugins/views_plugin_cache.inc',
          215 => 'plugins/views_plugin_cache_none.inc',
          216 => 'plugins/views_plugin_cache_time.inc',
          217 => 'plugins/views_plugin_display.inc',
          218 => 'plugins/views_plugin_display_attachment.inc',
          219 => 'plugins/views_plugin_display_block.inc',
          220 => 'plugins/views_plugin_display_default.inc',
          221 => 'plugins/views_plugin_display_embed.inc',
          222 => 'plugins/views_plugin_display_extender.inc',
          223 => 'plugins/views_plugin_display_feed.inc',
          224 => 'plugins/views_plugin_display_page.inc',
          225 => 'plugins/views_plugin_exposed_form_basic.inc',
          226 => 'plugins/views_plugin_exposed_form.inc',
          227 => 'plugins/views_plugin_exposed_form_input_required.inc',
          228 => 'plugins/views_plugin_localization_core.inc',
          229 => 'plugins/views_plugin_localization.inc',
          230 => 'plugins/views_plugin_localization_none.inc',
          231 => 'plugins/views_plugin_pager.inc',
          232 => 'plugins/views_plugin_pager_full.inc',
          233 => 'plugins/views_plugin_pager_mini.inc',
          234 => 'plugins/views_plugin_pager_none.inc',
          235 => 'plugins/views_plugin_pager_some.inc',
          236 => 'plugins/views_plugin_query.inc',
          237 => 'plugins/views_plugin_query_default.inc',
          238 => 'plugins/views_plugin_row.inc',
          239 => 'plugins/views_plugin_row_fields.inc',
          240 => 'plugins/views_plugin_row_rss_fields.inc',
          241 => 'plugins/views_plugin_style.inc',
          242 => 'plugins/views_plugin_style_default.inc',
          243 => 'plugins/views_plugin_style_grid.inc',
          244 => 'plugins/views_plugin_style_list.inc',
          245 => 'plugins/views_plugin_style_jump_menu.inc',
          246 => 'plugins/views_plugin_style_mapping.inc',
          247 => 'plugins/views_plugin_style_rss.inc',
          248 => 'plugins/views_plugin_style_summary.inc',
          249 => 'plugins/views_plugin_style_summary_jump_menu.inc',
          250 => 'plugins/views_plugin_style_summary_unformatted.inc',
          251 => 'plugins/views_plugin_style_table.inc',
          252 => 'tests/handlers/views_handlers.test',
          253 => 'tests/handlers/views_handler_area_text.test',
          254 => 'tests/handlers/views_handler_argument_null.test',
          255 => 'tests/handlers/views_handler_argument_string.test',
          256 => 'tests/handlers/views_handler_field.test',
          257 => 'tests/handlers/views_handler_field_boolean.test',
          258 => 'tests/handlers/views_handler_field_custom.test',
          259 => 'tests/handlers/views_handler_field_counter.test',
          260 => 'tests/handlers/views_handler_field_date.test',
          261 => 'tests/handlers/views_handler_field_file_extension.test',
          262 => 'tests/handlers/views_handler_field_file_size.test',
          263 => 'tests/handlers/views_handler_field_math.test',
          264 => 'tests/handlers/views_handler_field_url.test',
          265 => 'tests/handlers/views_handler_field_xss.test',
          266 => 'tests/handlers/views_handler_filter_combine.test',
          267 => 'tests/handlers/views_handler_filter_date.test',
          268 => 'tests/handlers/views_handler_filter_equality.test',
          269 => 'tests/handlers/views_handler_filter_in_operator.test',
          270 => 'tests/handlers/views_handler_filter_numeric.test',
          271 => 'tests/handlers/views_handler_filter_string.test',
          272 => 'tests/handlers/views_handler_sort_random.test',
          273 => 'tests/handlers/views_handler_sort_date.test',
          274 => 'tests/handlers/views_handler_sort.test',
          275 => 'tests/test_handlers/views_test_area_access.inc',
          276 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
          277 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
          278 => 'tests/test_plugins/views_test_plugin_style_test_mapping.inc',
          279 => 'tests/plugins/views_plugin_display.test',
          280 => 'tests/styles/views_plugin_style_jump_menu.test',
          281 => 'tests/styles/views_plugin_style.test',
          282 => 'tests/styles/views_plugin_style_base.test',
          283 => 'tests/styles/views_plugin_style_mapping.test',
          284 => 'tests/styles/views_plugin_style_unformatted.test',
          285 => 'tests/views_access.test',
          286 => 'tests/views_analyze.test',
          287 => 'tests/views_basic.test',
          288 => 'tests/views_argument_default.test',
          289 => 'tests/views_argument_validator.test',
          290 => 'tests/views_exposed_form.test',
          291 => 'tests/field/views_fieldapi.test',
          292 => 'tests/views_glossary.test',
          293 => 'tests/views_groupby.test',
          294 => 'tests/views_handlers.test',
          295 => 'tests/views_module.test',
          296 => 'tests/views_pager.test',
          297 => 'tests/views_plugin_localization_test.inc',
          298 => 'tests/views_translatable.test',
          299 => 'tests/views_query.test',
          300 => 'tests/views_upgrade.test',
          301 => 'tests/views_test.views_default.inc',
          302 => 'tests/comment/views_handler_argument_comment_user_uid.test',
          303 => 'tests/comment/views_handler_filter_comment_user_uid.test',
          304 => 'tests/node/views_node_revision_relations.test',
          305 => 'tests/taxonomy/views_handler_relationship_node_term_data.test',
          306 => 'tests/user/views_handler_field_user_name.test',
          307 => 'tests/user/views_user_argument_default.test',
          308 => 'tests/user/views_user_argument_validate.test',
          309 => 'tests/user/views_user.test',
          310 => 'tests/views_cache.test',
          311 => 'tests/views_view.test',
          312 => 'tests/views_ui.test',
        ),
        'version' => '7.x-3.14',
        'project' => 'views',
        'datestamp' => '1466019588',
      ),
      'version' => '7.x-3.14',
    ),
    'views_ui' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views/views_ui.module',
      'name' => 'views_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views UI',
        'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
        'package' => 'Views',
        'core' => '7.x',
        'configure' => 'admin/structure/views',
        'dependencies' => 
        array (
          0 => 'views',
        ),
        'files' => 
        array (
          0 => 'views_ui.module',
          1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
        ),
        'version' => '7.x-3.14',
        'project' => 'views',
        'datestamp' => '1466019588',
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.14',
    ),
    'actions_permissions' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views_bulk_operations/actions_permissions.module',
      'name' => 'actions_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Actions permissions (VBO)',
        'description' => 'Provides permission-based access control for actions. Used by Views Bulk Operations.',
        'package' => 'Administration',
        'core' => '7.x',
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.3',
    ),
    'views_bulk_operations' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/contrib/views_bulk_operations/views_bulk_operations.module',
      'name' => 'views_bulk_operations',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Views Bulk Operations',
        'description' => 'Provides a way of selecting multiple rows and applying operations to them.',
        'dependencies' => 
        array (
          0 => 'entity',
          1 => 'views',
        ),
        'package' => 'Views',
        'core' => '7.x',
        'php' => '5.2.9',
        'files' => 
        array (
          0 => 'plugins/operation_types/base.class.php',
          1 => 'views/views_bulk_operations_handler_field_operations.inc',
        ),
        'version' => '7.x-3.3',
        'project' => 'views_bulk_operations',
        'datestamp' => '1435764542',
      ),
      'version' => '7.x-3.3',
    ),
    'aegir_commit' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/aegir_commit/aegir_commit.module',
      'name' => 'aegir_commit',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Commit',
        'description' => 'Task for committing changes to a site.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'aegir_download' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/aegir_download/aegir_download.module',
      'name' => 'aegir_download',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Download',
        'description' => 'Adds the ability to download packages to aegir hosted sites.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'aegir_update' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/aegir_update/aegir_update.module',
      'name' => 'aegir_update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aegir Update',
        'description' => 'Adds the ability to update your Drupal site using Aegir.',
        'core' => '7.x',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_acquia' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_acquia/devshop_acquia.module',
      'name' => 'devshop_acquia',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DevShop Acquia Integration',
        'description' => 'Allows for Acquia Cloud Hooks to be used as deploy hooks in DevShop.',
        'core' => '7.x',
        'package' => 'DevShop',
        'dependencies' => 
        array (
          0 => 'devshop_hosting',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_bitbucket' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_bitbucket/devshop_bitbucket.module',
      'name' => 'devshop_bitbucket',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DevShop BitBucket',
        'description' => 'Support for BitBucket Webhooks',
        'core' => '7.x',
        'package' => 'DevShop',
        'files' => 
        array (
          0 => 'includes/add-key.inc',
          1 => 'includes/admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'devshop_projects',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_dothooks' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_dothooks/devshop_dothooks.module',
      'name' => 'devshop_dothooks',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '100',
      'info' => 
      array (
        'name' => 'DevShop .hooks integration',
        'description' => 'Allows the usage of a .hooks file when running tasks on environments.',
        'core' => '7.x',
        'package' => 'DevShop',
        'dependencies' => 
        array (
          0 => 'devshop_projects',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_extra_users' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_extra_users/devshop_extra_users.module',
      'name' => 'devshop_extra_users',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DevShop Extra Install',
        'description' => 'Example module for loading extra info for an install profile.',
        'core' => '7.x',
        'package' => 'DevShop',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_github' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_github/devshop_github.module',
      'name' => 'devshop_github',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7001',
      'weight' => '2',
      'info' => 
      array (
        'name' => 'DevShop GitHub',
        'description' => 'Integration with GitHub',
        'core' => '7.x',
        'package' => 'DevShop',
        'files' => 
        array (
          0 => 'includes/add-key.inc',
          1 => 'includes/admin.inc',
        ),
        'dependencies' => 
        array (
          0 => 'devshop_projects',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_hosting' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_hosting.module',
      'name' => 'devshop_hosting',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7005',
      'weight' => '11',
      'info' => 
      array (
        'name' => 'DevShop Hosting',
        'description' => 'Provides the streamlined DevShop user interface and experience.  NOTE: This module alters some of of the UI of Aegir Hostmaster.',
        'core' => '7.x',
        'package' => 'DevShop',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_permissions' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_permissions/devshop_permissions.module',
      'name' => 'devshop_permissions',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DevShop Permissions',
        'description' => 'Default user permissions for devshop.',
        'core' => '7.x',
        'package' => 'Features',
        'dependencies' => 
        array (
          0 => 'devshop_projects',
          1 => 'features',
        ),
        'features' => 
        array (
          'user_permission' => 
          array (
            0 => 'access content',
            1 => 'access disabled sites',
            2 => 'access filemanager',
            3 => 'access hosting logs',
            4 => 'access hosting wizard',
            5 => 'access project logs',
            6 => 'access task logs',
            7 => 'administer SSH public keys',
            8 => 'administer clients',
            9 => 'administer hosting',
            10 => 'administer hosting aliases',
            11 => 'administer hosting backup queue',
            12 => 'administer hosting features',
            13 => 'administer hosting queues',
            14 => 'administer hosting settings',
            15 => 'administer hosting site backup manager',
            16 => 'administer platforms',
            17 => 'administer projects',
            18 => 'administer servers',
            19 => 'administer sites',
            20 => 'administer tasks',
            21 => 'cancel own tasks',
            22 => 'configure devshop pull',
            23 => 'create backup schedules',
            24 => 'create backup task',
            25 => 'create backup-delete task',
            26 => 'create client',
            27 => 'create clone task',
            28 => 'create delete task',
            29 => 'create devshop-delete task',
            30 => 'create devshop-deploy task',
            31 => 'create disable task',
            32 => 'create download task',
            33 => 'create enable task',
            34 => 'create flush_cache task',
            35 => 'create flush_drush_cache task',
            36 => 'create lock task',
            37 => 'create login-reset task',
            38 => 'create migrate task',
            39 => 'create package',
            40 => 'create platform',
            41 => 'create project',
            42 => 'create rebuild_registry task',
            43 => 'create restore task',
            44 => 'create run_cron task',
            45 => 'create server',
            46 => 'create site',
            47 => 'create site aliases',
            48 => 'create sites on locked platforms',
            49 => 'create sync task',
            50 => 'create unlock task',
            51 => 'create update task',
            52 => 'create verify task',
            53 => 'delete own client',
            54 => 'delete package',
            55 => 'delete platform',
            56 => 'delete projects',
            57 => 'delete server',
            58 => 'delete site',
            59 => 'edit client uname',
            60 => 'edit client users',
            61 => 'edit own client',
            62 => 'edit package',
            63 => 'edit platform',
            64 => 'edit project',
            65 => 'edit server',
            66 => 'edit site',
            67 => 'manage any SSH public keys',
            68 => 'manage own SSH public keys',
            69 => 'retry failed tasks',
            70 => 'update status of tasks',
            71 => 'view any SSH public keys',
            72 => 'view client',
            73 => 'view git commit logs',
            74 => 'view locked platforms',
            75 => 'view own SSH public keys',
            76 => 'view own tasks',
            77 => 'view package',
            78 => 'view platform',
            79 => 'view project',
            80 => 'view projects',
            81 => 'view server',
            82 => 'view site',
            83 => 'view task',
          ),
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_projects' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_projects/devshop_projects.module',
      'name' => 'devshop_projects',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7008',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'DevShop Projects',
        'description' => 'A DevShop module to sites/platforms together into projects.',
        'core' => '7.x',
        'package' => 'DevShop',
        'files' => 
        array (
          0 => 'inc/create/create.inc',
          1 => 'inc/create/step-1.inc',
          2 => 'inc/create/step-2.inc',
          3 => 'inc/create/step-3.inc',
          4 => 'inc/create/step-4.inc',
          5 => 'inc/admin.inc',
          6 => 'inc/create-wizard.inc',
          7 => 'inc/forms.inc',
          8 => 'inc/logs.inc',
          9 => 'inc/nodes.inc',
          10 => 'inc/queue.inc',
          11 => 'inc/tasks-ajax.inc',
          12 => 'inc/ui.inc',
          13 => 'tasks/commit.inc',
          14 => 'tasks/create.inc',
          15 => 'tasks/deploy.inc',
          16 => 'tasks/pull.inc',
          17 => 'tasks/tasks.inc',
        ),
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_alias',
          2 => 'hosting_package',
          3 => 'hosting_git',
          4 => 'hosting_git_pull',
          5 => 'ctools',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_pull' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_pull/devshop_pull.module',
      'name' => 'devshop_pull',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DevShop Pull',
        'description' => 'Provides a variety of methods to trigger a Pull Code task on DevShop projects.',
        'core' => '7.x',
        'package' => 'DevShop',
        'dependencies' => 
        array (
          0 => 'devshop_projects',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_remotes' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_remotes/devshop_remotes.module',
      'name' => 'devshop_remotes',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DevShop Remotes',
        'description' => 'Manage remote environments with devshop.',
        'core' => '7.x',
        'package' => 'DevShop',
        'dependencies' => 
        array (
          0 => 'devshop_projects',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'devshop_testing' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/modules/devshop/devshop_testing/devshop_testing.module',
      'name' => 'devshop_testing',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => '7000',
      'weight' => '1',
      'info' => 
      array (
        'name' => 'DevShop Testing',
        'description' => 'Allow simpletests to be run easily on your DevShop projects.',
        'core' => '7.x',
        'package' => 'DevShop',
        'files' => 
        array (
          0 => 'pages.inc',
        ),
        'dependencies' => 
        array (
          0 => 'devshop_projects',
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
  ),
  'themes' => 
  array (
    'bartik' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/themes/bartik/bartik.info',
      'name' => 'bartik',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bartik',
        'description' => 'A flexible, recolorable theme with many regions.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'css/layout.css',
            1 => 'css/style.css',
            2 => 'css/colors.css',
          ),
          'print' => 
          array (
            0 => 'css/print.css',
          ),
        ),
        'regions' => 
        array (
          'header' => 'Header',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'highlighted' => 'Highlighted',
          'featured' => 'Featured',
          'content' => 'Content',
          'sidebar_first' => 'Sidebar first',
          'sidebar_second' => 'Sidebar second',
          'triptych_first' => 'Triptych first',
          'triptych_middle' => 'Triptych middle',
          'triptych_last' => 'Triptych last',
          'footer_firstcolumn' => 'Footer first column',
          'footer_secondcolumn' => 'Footer second column',
          'footer_thirdcolumn' => 'Footer third column',
          'footer_fourthcolumn' => 'Footer fourth column',
          'footer' => 'Footer',
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '0',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'boots' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/themes/boots/boots.info',
      'name' => 'boots',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Boots',
        'description' => 'Bootstrap-powered theme for devshop.',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'base theme' => 'bootstrap',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'boots.css',
            1 => 'fontawesome/css/font-awesome.min.css',
          ),
        ),
        'scripts' => 
        array (
          0 => 'js/jquery.matchHeight.js',
          1 => 'js/jquery.timeago.js',
          2 => 'js/boots.js',
        ),
        'settings' => 
        array (
          'toggle_logo' => '0',
          'bootstrap_fluid_container' => '1',
          'bootstrap_navbar_position' => 'static-top',
          'bootstrap_navbar_inverse' => '1',
          'bootstrap_region_well-sidebar_first' => '0',
          'bootstrap_cdn_provider' => 'custom',
          'bootstrap_cdn_custom_css' => '/profiles/devmaster/themes/boots/bootstrap/css/bootstrap.css',
          'bootstrap_cdn_custom_css_min' => '/profiles/devmaster/themes/boots/bootstrap/css/bootstrap.min.css',
          'bootstrap_cdn_custom_js' => '/profiles/devmaster/themes/boots/bootstrap/js/bootstrap.js',
          'bootstrap_cdn_custom_js_min' => '/profiles/devmaster/themes/boots/bootstrap/js/bootstrap.min.js',
          'bootstrap_forms_smart_descriptions_limit' => '40',
        ),
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '5.2.4',
      ),
      'version' => NULL,
    ),
    'bootstrap' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/themes/contrib/bootstrap/bootstrap.info',
      'name' => 'bootstrap',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bootstrap',
        'description' => 'Built to use Bootstrap, a sleek, intuitive, and powerful front-end framework for faster and easier web development.',
        'core' => '7.x',
        'simplytest_dependencies' => 
        array (
          0 => 'jquery_update',
        ),
        'regions' => 
        array (
          'navigation' => 'Navigation',
          'header' => 'Top Bar',
          'highlighted' => 'Highlighted',
          'help' => 'Help',
          'content' => 'Content',
          'sidebar_first' => 'Primary',
          'sidebar_second' => 'Secondary',
          'footer' => 'Footer',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
        ),
        'settings' => 
        array (
          'bootstrap_fluid_container' => '0',
          'bootstrap_button_size' => '',
          'bootstrap_button_colorize' => '1',
          'bootstrap_button_iconize' => '1',
          'bootstrap_image_shape' => '',
          'bootstrap_image_responsive' => '1',
          'bootstrap_table_bordered' => '0',
          'bootstrap_table_condensed' => '0',
          'bootstrap_table_hover' => '1',
          'bootstrap_table_striped' => '1',
          'bootstrap_table_responsive' => '1',
          'bootstrap_breadcrumb' => '1',
          'bootstrap_breadcrumb_home' => '0',
          'bootstrap_breadcrumb_title' => '1',
          'bootstrap_navbar_position' => '',
          'bootstrap_navbar_inverse' => '0',
          'bootstrap_pager_first_and_last' => '1',
          'bootstrap_region_well-navigation' => '',
          'bootstrap_region_well-header' => '',
          'bootstrap_region_well-highlighted' => '',
          'bootstrap_region_well-help' => '',
          'bootstrap_region_well-content' => '',
          'bootstrap_region_well-sidebar_first' => 'well',
          'bootstrap_region_well-sidebar_second' => '',
          'bootstrap_region_well-footer' => '',
          'bootstrap_anchors_fix' => '0',
          'bootstrap_anchors_smooth_scrolling' => '0',
          'bootstrap_forms_required_has_error' => '0',
          'bootstrap_forms_has_error_value_toggle' => '1',
          'bootstrap_forms_smart_descriptions' => '1',
          'bootstrap_forms_smart_descriptions_limit' => '250',
          'bootstrap_forms_smart_descriptions_allowed_tags' => 'b, code, em, i, kbd, span, strong',
          'bootstrap_popover_enabled' => '1',
          'bootstrap_popover_animation' => '1',
          'bootstrap_popover_html' => '0',
          'bootstrap_popover_placement' => 'right',
          'bootstrap_popover_selector' => '',
          'bootstrap_popover_trigger' => 
          array (
            '\'hover\'' => '0',
            '\'focus\'' => '0',
            '\'click\'' => 'click',
          ),
          'bootstrap_popover_trigger_autoclose' => '1',
          'bootstrap_popover_title' => '',
          'bootstrap_popover_content' => '',
          'bootstrap_popover_delay' => '0',
          'bootstrap_popover_container' => 'body',
          'bootstrap_tooltip_enabled' => '1',
          'bootstrap_tooltip_animation' => '1',
          'bootstrap_tooltip_html' => '0',
          'bootstrap_tooltip_placement' => 'auto left',
          'bootstrap_tooltip_selector' => '',
          'bootstrap_tooltip_trigger' => 
          array (
            '\'hover\'' => 'hover',
            '\'focus\'' => 'focus',
            '\'click\'' => '0',
          ),
          'bootstrap_tooltip_delay' => '0',
          'bootstrap_tooltip_container' => 'body',
          'bootstrap_cdn_provider' => 'jsdelivr',
          'bootstrap_cdn_custom_css' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.css',
          'bootstrap_cdn_custom_css_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/css/bootstrap.min.css',
          'bootstrap_cdn_custom_js' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.js',
          'bootstrap_cdn_custom_js_min' => 'https://cdn.jsdelivr.net/bootstrap/3.3.5/js/bootstrap.min.js',
          'bootstrap_cdn_jsdelivr_version' => '3.3.5',
          'bootstrap_cdn_jsdelivr_theme' => 'bootstrap',
          'toggle_name' => '1',
          'toggle_search' => '1',
          'jquery_update_jquery_version' => '2.1',
        ),
        'exclude' => 
        array (
          'css' => 
          array (
            0 => 'misc/vertical-tabs.css',
            1 => 'modules/aggregator/aggregator.css',
            2 => 'modules/book/book.css',
            3 => 'modules/comment/comment.css',
            4 => 'modules/dblog/dblog.css',
            5 => 'modules/file/file.css',
            6 => 'modules/filter/filter.css',
            7 => 'modules/forum/forum.css',
            8 => 'modules/help/help.css',
            9 => 'modules/menu/menu.css',
            10 => 'modules/openid/openid.css',
            11 => 'modules/poll/poll.css',
            12 => 'modules/search/search.css',
            13 => 'modules/statistics/statistics.css',
            14 => 'modules/syslog/syslog.css',
            15 => 'modules/system/maintenance.css',
            16 => 'modules/system/system.maintenance.css',
            17 => 'modules/system/system.menus.css',
            18 => 'modules/system/system.messages.css',
            19 => 'modules/system/system.theme.css',
            20 => 'modules/taxonomy/taxonomy.css',
            21 => 'modules/tracker/tracker.css',
            22 => 'modules/update/update.css',
            23 => 'modules/user/user.css',
          ),
        ),
        'breakpoints' => 
        array (
          'screen-xs-max' => '(max-width: 767px)',
          'screen-sm-min' => '(min-width: 768px)',
          'screen-sm-max' => '(max-width: 991px)',
          'screen-md-min' => '(min-width: 992px)',
          'screen-md-max' => '(max-width: 1199px)',
          'screen-lg-min' => '(min-width: 1200px)',
        ),
        'multipliers' => 
        array (
          'screen-xs-max' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-sm-min' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-sm-max' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-md-min' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-md-max' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
          'screen-lg-min' => 
          array (
            0 => '1.5x',
            1 => '2x',
          ),
        ),
        'version' => '7.x-3.8',
        'project' => 'bootstrap',
        'datestamp' => '1478114647',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.8',
    ),
    'eldir' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/profiles/devmaster/themes/contrib/eldir/eldir.info',
      'name' => 'eldir',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Eldir',
        'description' => 'Companion theme for the Aegir hosting system.',
        'version' => '7.x-3.9',
        'core' => '7.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
        ),
        'stylesheets-conditional' => 
        array (
          'lt IE 7' => 
          array (
            'all' => 
            array (
              0 => 'ie6.css',
            ),
          ),
        ),
        'regions' => 
        array (
          'sidebar_first' => 'Sidebar top',
          'sidebar_second' => 'Sidebar bottom',
          'content' => 'Content',
          'content_bottom' => 'Content bottom',
          'header' => 'Header',
          'footer' => 'Footer',
          'help' => 'Help',
        ),
        'project' => 'eldir',
        'datestamp' => '1483645748',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.x-3.9',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'settings' => 
        array (
          'garland_width' => 'fluid',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'seven' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/themes/seven/seven.info',
      'name' => 'seven',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Seven',
        'description' => 'A simple one-column, tableless, fluid width administration theme.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'screen' => 
          array (
            0 => 'reset.css',
            1 => 'style.css',
          ),
        ),
        'settings' => 
        array (
          'shortcut_module_link' => '1',
        ),
        'regions' => 
        array (
          'content' => 'Content',
          'help' => 'Help',
          'page_top' => 'Page top',
          'page_bottom' => 'Page bottom',
          'sidebar_first' => 'First sidebar',
        ),
        'regions_hidden' => 
        array (
          0 => 'sidebar_first',
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
    'stark' => 
    array (
      'filename' => '/var/aegir/devmaster-1.x/themes/stark/stark.info',
      'name' => 'stark',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Stark',
        'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
        'package' => 'Core',
        'version' => '7.54',
        'core' => '7.x',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'layout.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1485986921',
        'dependencies' => 
        array (
        ),
        'php' => '5.2.4',
      ),
      'version' => '7.54',
    ),
  ),
);
$options['profile'] = 'devmaster';
$options['language'] = 'en';
$options['aliases'] = array (
);
# Aegir additions.
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];

# Local non-aegir-generated additions.
@include_once('/var/aegir/devmaster-1.x/sites/srv01.devcloud.vardot.io/local.drushrc.php');
