<?php
namespace App\Controllers;
use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news' => $model->getNews(),
            'title' => 'News archive',
            'id' => $data['id'],
        ];

        echo view('templates/dashboard', $data);
    }

    public function view($slug = null)
    {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin') {
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        echo view('news/view', $data);
    } else {
        return redirect()->to('/');
    }
    }

    public function create()
    {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin') {
            $model = model(NewsModel::class);
            if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body' => 'required',
            ])) {
                $model->save([
                    'title' => $this->request->getPost('title'),
                    'slug' => url_title($this->request->getPost('title'), '-', true),
                    'body' => $this->request->getPost('body'),
                ]);

                echo view('news/success');
            } else {
                echo view('news/create', ['title' => 'Create a news item']);
            }
        } else {
            return redirect()->to('/');
        }
    }

    public function display()
    {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin') {
            $model = model(NewsModel::class);
            $data['news'] = $model->getNews();
            echo view('news/news_list', $data);

        } else {
            return redirect()->to('/');
        }
    }

    public function singleNews($id = null)
    {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin') {
            $model = model(NewsModel::class);
            $data['news'] = $model->where('id', $id)->first();
            return view('news/edit_news', $data);
        } else {
            return redirect()->to('/');
        }
    }

    public function update()
    {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin') {
            $model = model(NewsModel::class);
            $id = $this->request->getVar('id');
            $data = [
                'title' => $this->request->getVar('title'),
                'body' => $this->request->getVar('body'),
            ];
            $model->update($id, $data);
            return $this->response->redirect(site_url('/news-update'));
        } else {
            return redirect()->to('news/news_list');
        }
    }

    public function delete($id = null)
    {
        if (isset($_SESSION['isLoggedIn']) && $_SESSION['role'] == 'admin') {
            $model = model(NewsModel::class);
            $data['news'] = $model->where('id', $id)->delete();
            return redirect()->to('/news-update');
        } else {
            return redirect()->to('/');
        }
    }
}
