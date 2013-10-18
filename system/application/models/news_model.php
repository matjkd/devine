<?php

	class News_model extends Model
	{

		function list_news()
		{
			$data = array();
			$this -> db -> where('page_type', 1);
			$this -> db -> select('news.date_added, news.added_by, news.news_id, news.news_content, news.news_title, attachments.file, attachments.title');
			$this -> db -> order_by('news.date_added', 'desc');
			$this -> db -> join('news_attachments', 'news_attachments.news_id=news.news_id', 'left');
			$this -> db -> join('attachments', 'attachments.attachment_id=news_attachments.attachment_id', 'left');
			$query = $this -> db -> get('news');
			if ($query -> num_rows() > 0)
			{
				foreach ($query->result_array() as $row)
					$data[] = $row;
			}
			$query -> free_result();

			return $data;
		}

		function get_news($id)
		{
			$data = array();
			$this -> db -> where('news_id', $id);
			$query = $this -> db -> get('news');
			if ($query -> num_rows() == 1)
			{
				foreach ($query->result_array() as $row)
					$data[] = $row;
			}
			$query -> free_result();

			return $data;
		}

		function edit_news($id)
		{

			$content_update = array(
				'news_content' => $this -> input -> post('content'),
				'date_added' => $this -> input -> post('date_added'),
				'news_title' => $this -> input -> post('title')
			);

			$this -> db -> where('news_id', $id);
			$update = $this -> db -> update('news', $content_update);
			return $update;
		}

		function delete_news($id)
		{
			$this -> db -> where('news_id', $id);
			$delete = $this -> db -> delete('news');
			return $delete;
		}

		function SaveForm($form_data)
		{
			$this -> db -> insert('news', $form_data);

			if ($this -> db -> affected_rows() == '1')
			{
				return TRUE;
			}

			return FALSE;
		}

	}
