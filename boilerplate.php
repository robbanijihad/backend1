<?php

# Nama  : Muhammad Jihad Robbani
# Kelas : TI 05 2020

# membuat class Animal
class Animal
{
  # property animals
  public $animal;

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($nama)
  {
    $this->animal = $nama;
  }

  # method index - menampilkan data animals
  public function index()
  {
    # gunakan foreach untuk menampilkan data animals (array)
    foreach ($this->animal as $a) {
      echo "- $a <br>";
    }
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($nama)
  {
    # gunakan method array_push untuk menambahkan data baru
    return array_push($this->animal, $nama);
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $nama)
  {
    return $this->animal[$index] = $nama;
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    # gunakan method unset atau array_splice untuk menghapus data array
    return array_splice($this->animal, $index, 1);
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(['cumi', 'buaya']);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru (sapi) <br>";
$animal->store('sapi');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'anoa');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(2);
$animal->index();
echo "<br>";
