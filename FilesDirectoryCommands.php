namespace Drush\Commands;

class FilesDirectoryCommands extends DrushCommands {

  /**
   * Command that returns info about the public files directory.
   *
   * @usage get-files-size
   *   Returns size of the public files directory and number of files
   *
   * @command get-files-size
   * @aliases gfs
   *
   */
  public function getFilesSize() {
     $this->logger()->success(dt('Achievement unlocked.'));
  }

}

