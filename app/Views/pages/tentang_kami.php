<?= $this->extend('layout/no-sidebar'); ?>
<?= $this->section('content'); ?>

<!-- Main -->
<section id="highlights" class="wrapper style3">
    <div class="title">Tentang Kami</div>
    <div class="container">
        <div class="row aln-center">
            <div class="col-3 col-12-medium">
                <section class="highlight">
                    <h3><a href="#">Profil Kecamatan</a></h3>
                    <ul class="actions">
                        <li><a href="#" class="button style1">View</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-3 col-12-medium">
                <section class="highlight">
                    <h3><a href="#">Keorganisasian</a></h3>
                    <ul class="actions">
                        <li><a href="#" class="button style1">View</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-3 col-12-medium">
                <section class="highlight">
                    <h3><a href="#">Camat</a></h3>
                    <ul class="actions">
                        <li><a href="#" class="button style1">View</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-3 col-12-medium">
                <section class="highlight">
                    <h3><a href="#">Info</a></h3>
                    <ul class="actions">
                        <li><a href="#" class="button style1">View</a></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>