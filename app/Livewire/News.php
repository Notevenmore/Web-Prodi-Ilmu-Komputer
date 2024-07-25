<?php

namespace App\Livewire;

use Livewire\Component;

class News extends Component
{
    private $berita = [
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/topnews.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Hover Berita.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Hover Berita.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
        [
            'title' => 'Judul',
            'date' => "Date",
            'img' => 'img/Rectangle 31.png',
            "content" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam quia non et, doloremque consequatur porro minima aperiam. Nemo voluptatum ipsa illum non quisquam labore modi excepturi similique quis dignissimos aspernatur praesentium sequi veniam autem suscipit, at tempore velit ex dolorem temporibus cum! Perspiciatis ab minima dolorem assumenda libero, fugiat eveniet eligendi, quae error enim tenetur eaque numquam totam et blanditiis adipisci molestias nemo sit? A distinctio voluptatibus facilis ducimus molestiae tempore veritatis id. Neque recusandae repellat qui facere, voluptatum ad odio ducimus nam molestias blanditiis vitae doloremque harum, tempora ipsa, natus laboriosam officiis nisi. Illum rerum sed quod eius aut?',
        ],
    ];
    public function render()
    {
        return view('livewire.news')->with([
            'news' => $this->berita,
        ]);
    }
}
