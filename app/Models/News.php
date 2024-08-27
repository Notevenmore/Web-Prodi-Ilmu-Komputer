<?php

namespace App\Models;

class News {
    public $title;
    public $date;
    public $img;
    public $content;

    public function __construct($title, $date, $img, $content) {
      $this->title = $title;
      $this->date = $date;
      $this->img = $img;
      $this->content = $content;
    }

    // convert ke array sederhana agar bisa diterima oleh livewire
    public function toArray() {
        return [
            'title' => $this->title,
            'date' => $this->date,
            'img' => $this->img,
            'content' => $this->content
        ];
    }

    public static function all(){
        // data peminatan
        $listnews = [
          [
            'title' => 'SEMINAR NASIONAL SenTIK STI&K 7',
            'date' => "03 August 2023",
            'img' => 'img/topnews.png',
            "content" => 'Seminar nasional yang diselenggarakan oleh SeNTIK STI&K adalah sebuah acara bergengsi, acara ini adalah panggung dimana para peneliti mencurahkan hasil penelitiannya untuk diterbitkan menjadi sebuah artikel prosiding berskala nasional dan terindex google scholar, ditambah juga acara ini kesempatan untuk melihat bapak Sandiaga Uno berbicara secara langsung karena beliau adalah pembicara kunci dalam acara seminar nasional kali ini.<br>
                          Tantangan dari mengikuti acara ini adalah tidak sembarangan orang dapat ikut, total pendaftar adalah 276 peneliti dari berbagai universitas seperti Universitas Gunadarma, Universitas Negri Yogyakarta, dan sebagainya, serta dari berbagai kalangan mahasiswa maupun dosen. Namun yang dapat mengikuti acara ini hanyalah 55 peserta. Salah satu mahasiswa prodi Ilmu Komputer bernama Muhammad Nezha Alfatah Chandrawisesa mendapat kesempatan untuk mempresentasikan hasil kerja kerasnya kepada para peneliti hebat lainnya, selain itu Nezha juga membuat teman-teman baru yang memiliki latar belakang hebat dalam acara ini. Dan dari kesempatan ini Nezha mengatakan mendapatkan publikasi artikel penelitian berskala nasional pertamanya.<br>
                          Pesan dari Nezha adalah jangan takut untuk mencoba, karena hal yang tidak mungkin dipikiran kita bisa jadi sebenarnya adalah suatu hal yang memungkinkan, jangan pernah membatasi diri mu sendiri untuk berkembang. Semangat untuk mahasiwa prodi Ilmu Komputer dan semoga dapat menginspirasi mahasiswa lainnya.',
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

        // ubah jadi collections
        $newsCollection = [];
        foreach ($listnews as $news) {
            $newsCollection[] = new self($news['title'], $news['date'], $news['img'], $news['content']);
        }

        return $newsCollection;
    }
}