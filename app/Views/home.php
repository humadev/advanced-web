<html>
    <body>
        <form action="/" method="post">
            <input type="text" name="nim" />
            <input type="text" name="nama" />
            <button>simpan</button>
        </form>
        <h1>Welcome to the home page</h1>
        <p>This is the home page for the application.</p>
        <ol>
        <?php foreach ($dataMahasiswa as $mahasiswa): ?>

        <li>
            <?= esc($mahasiswa['nim']) ?> : <?= esc($mahasiswa['nama']) ?>
            <a href="/home/edit/<?= $mahasiswa['id'] ?>">Edit</a>
            <a href="/home/onDelete/<?= $mahasiswa['id'] ?>">Delete</a>
        </li>
        
        <?php endforeach ?>
        </ol>
    </body>
</html>