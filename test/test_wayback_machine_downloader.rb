require 'minitest/autorun'
require 'wayback_machine_downloader'

class WaybackMachineDownloaderTest < Minitest::Test

  def setup
    @wayback_machine_downloader = WaybackMachineDownloader.new(
      base_url: 'http://www.onlyfreegames.net')
    $stdout = StringIO.new
  end

  def teardown
    FileUtils.rm_rf(@wayback_machine_downloader.backup_path)
  end

  

  def test_file_list_exclude_filter_without_matches
    @wayback_machine_downloader.exclude_filter = 'abc123'
    assert_equal 68, @wayback_machine_downloader.get_file_list_curated.size
  end

  def test_file_list_exclude_filter_with_1_match
    @wayback_machine_downloader.exclude_filter = 'menu.html'
    assert_equal 67, @wayback_machine_downloader.get_file_list_curated.size
  end

  def test_file_list_exclude_filter_with_a_regex
    @wayback_machine_downloader.exclude_filter = '/\.(gif|je?pg|bmp)$/i'
    assert_equal 31, @wayback_machine_downloader.get_file_list_curated.size
  end

  def test_file_download
    @wayback_machine_downloader.download_files
    linux_page = open 'websites/www.onlyfreegames.net/linux.htm'
    assert_includes linux_page.read, "Linux Games"
  end

  def test_all_timestamps_being_respected
    @wayback_machine_downloader.all_timestamps = true
    assert_equal 68, @wayback_machine_downloader.get_file_list_curated.size
  end

  def test_from_timestamp_being_respected
    @wayback_machine_downloader.from_timestamp = 20050716231334
    file_url = @wayback_machine_downloader.get_file_list_curated["linux.htm"][:file_url]
    assert_equal "http://www.onlyfreegames.net:80/linux.htm", file_url
  end

  def test_to_timestamp_being_respected
    @wayback_machine_downloader.to_timestamp = 20050716231334
    assert_nil @wayback_machine_downloader.get_file_list_curated["linux.htm"]
  end

  def test_all_get_file_list_curated_size
    @wayback_machine_downloader.all = true
    assert_equal 69, @wayback_machine_downloader.get_file_list_curated.size
  end
 
  # Testing encoding conflicts needs a different base_url
  def test_nonascii_suburls_download
    @wayback_machine_downloader = WaybackMachineDownloader.new(
      base_url: 'https://en.wikipedia.org/wiki/%C3%84')
    # Once just for the downloading...
    @wayback_machine_downloader.download_files
  end

  def test_nonascii_suburls_already_present
    @wayback_machine_downloader = WaybackMachineDownloader.new(
      base_url: 'https://en.wikipedia.org/wiki/%C3%84')
    # ... twice to test the "is already present" case
    @wayback_machine_downloader.download_files
    @wayback_machine_downloader.download_files
  end

end
