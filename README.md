## Latihan Git Branching

1. Master
2. Develop
 - Features Branch (branch fitur/task pekerjaan)
 - Merge Branch (menyatukan fitur2/pekerjaan)
3. Release
4. HotFix

### 1. Master 
untuk production / public, semua fitur & release terbaru & terupdate akan berada di branch ini

### 2. Develop
semua hasil development disimpan di branch ini,
berikut cara penggunaan Git yang benar untuk memulai pengerjaan sebuah fitur/task pekerjaan

```sh
$ git checkout -b namafitur develop
... mulai bekerja, jika sudah oke di add & commit ...
$ git add -A
$ git commit -m "fitur / task pekerjaan"
$ git checkout develop
$ git merge --no-ff namafitur
$ git branch -d namafitur
$ git push origin develop
```
### 3. Release
digunakan untuk membuat release baru, misal fitur2 yang dikerjakan tadi & sudah oke semua disatukan dalam satu versi release
cara membuat release adalah sebagai berikut

```sh
$ git checkout -b release-1.0 develop

... ubah versi di file Readme atau Change Log ...

$ git commit -a -m "upgrade versi ke 1.0"
$ git checkout master
$ git merge --no-ff release-1.0
$ git tag -a 1.0
$ git checkout develop
$ git merge --no-ff release-1.0
$ git branch -d release-1.0
```

### 4. Hotfix
digunakan untuk memperbaiki kesalahan program (bug) dalam sebuah release, caranya adalah sebagai berikut

```sh
$ git checkout -b hotfix-1.0.1 master

... betulkan bug nya disini, jika sudah lalu add & commit  ...

$ git commit -am "hotfix betulkan kesalahan"
$ git checkout master
$ git merge --no-ff hotfix-1.0.1
$ git tag -a 1.0.1
$ git checkout develop
$ git merge --no-ff hotfix-1.0.1
$ git branch -d hotfix-1.0.1
```

### Change Log

v1.0
7 Dec 2017 - Tambah Slider
v1.0.1 - benerin typo Latihan