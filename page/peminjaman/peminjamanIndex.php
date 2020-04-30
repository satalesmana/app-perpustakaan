<div class="card" >
    <div class="card-header bg-info">Daftar Peminjam</div>
    <div class="card-body">
        <form id="FormPeminjaman">
            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Peminjam </label>
                <div class="col-sm-4 ">
                    <select name="" class="form-control" id="nama_peminjam">
                        <option value="">0</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Pinjam </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control datepicker">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal Pengembalian </label>
                <div class="col-sm-3">
                    <input type="text" class="form-control datepicker">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Buku yang dipinjam </label>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <select name="" class="form-control" id="cmb_buku">
                            <option value="">0</option>
                        </select>
                        <input type="number" class="form-control " placeholder="Jml Pinjam"  >
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">Add Item</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">&nbsp; </label>
                <div class="col-sm-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Pengarang</th>
                                <th scope="col">Jumlah Pinjam</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sejarah</td>
                                <td>Budi S.</td>
                                <td>5</td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
</div>