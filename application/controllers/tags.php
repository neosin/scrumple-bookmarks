
<?php

class Bookmark_Controller extends Base_Controller {

	public function action_index()
    {
      $bookmarks = Bookmark::with('tags')
                  ->order_by('created_at','desc')
                  ->paginate(25);
      return View::make('bookmark.index')
                  ->with('bookmarks', $bookmarks);
    }

	public function action_show($id)
    {
      $bookmark = Bookmark::find($id);
      return View::make('bookmark.show')
                  ->with('bookmark', $bookmark);
    }
}