<?phprequire "config.php";(new \Nemundo\Db\Provider\MySql\Database\MySqlDatabase())->createDatabase();$reset = new \Nemundo\Project\Reset\ProjectReset();$reset->addReset(new \Nemundo\Content\Reset\ContentReset());(new \Nemundo\Project\Install\ProjectInstall())->install();(new \Nemundo\Content\App\Favorite\Application\FavoriteApplication())->installApp();(new \Nemundo\Content\App\PublicShare\Application\PublicShareApplication())->installApp();(new \Nemundo\Content\App\File\Application\FileApplication())->installApp();//(new \Nemundo\Content\App\Explorer\Application\ExplorerApplication())->installApp();(new \Nemundo\Content\App\Bookmark\Application\BookmarkApplication())->installApp();(new \Nemundo\Content\App\Camera\Application\CameraApplication())->installApp();$reset->remove();