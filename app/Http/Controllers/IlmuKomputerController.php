<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IlmuKomputerController extends Controller
{
    public function index(){
        $berita = [
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
        $event = [
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
        ];
        return view('index', [
            'title' => 'Prodi Ilmu Komputer',
            'news' => $berita,
            'events' => $event,
        ]);
    }

    public function berita() {
        $berita = [
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
        $event = [
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
            [
                'title' => "Judul",
                "date" => "24 November 2024",
                "started" => "11:00 AM",
                'ended' => "01:00 PM",
                'location' => "Universitas Pertamina",
                'img' => 'img/Hover Berita.png',
            ],
        ];
        return view('berita', [
            'title' => 'Berita | Prodi Ilmu Komputer',
            'news' => $berita,
            'events' => $event,
        ]);
    }
    
    public function akademik() {
        $list_matkul = [
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
            [
                [
                    "Kode" => "10101",
                    "MataKuliah" => "Bahasa Indonesia",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10102",
                    "MataKuliah" => "Bahasa Inggris",
                    "SKS" => 2,
                ],
                [
                    "Kode" => "10103",
                    "MataKuliah" => "Dasar Pemrograman",
                    "SKS" => 3,
                ],
                [
                    "Kode" => "10104",
                    "MataKuliah" => "Kalkulus",
                    "SKS" => 4,
                ],
                [
                    "Kode" => "10105",
                    "MataKuliah" => "Berpikir Komputasi",
                    "SKS" => 3,
                ],
            ],
        ];
        return view('akademik', [
            'title' => 'Akademik | Prodi Ilmu Komputer',
            'semesters' => $list_matkul,
        ]);
    }

    public function fasilitas() {
        return view('fasilitas', [
            'title' => 'Fasilitas | Prodi Ilmu Komputer',
        ]);
    }
    
}
