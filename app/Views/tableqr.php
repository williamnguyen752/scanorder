<?= $this->extend('template') ?>

<?= $this->section('main') ?>

<?php $numTables = $_GET['numTable'] ?? ""; ?>

<main>
    <div class="container py-5">
        <h2>QR Codes for Tables</h2>
        <div class="row">
            <div class="col-md-3">
                <input type="number" class="form-control" id="numTables" value="<?= $numTables ?>" placeholder="Number of Tables">
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary" onclick="generateQRCodes()">Generate QR Codes</button>
            </div>
        </div>
        <div id="qrCodes" class="qr-container"></div>
    </div>
    <script>
        function generateQRCodes() {
            const numTables = parseInt(document.getElementById('numTables').value);
            const qrCodesDiv = document.getElementById('qrCodes');
            qrCodesDiv.innerHTML = ''; // Clear previous QR codes

            for (let i = 1; i <= numTables; i++) {
                const qrDiv = document.createElement('div');
                qrDiv.classList.add('qr-code');

                const qrTitle = document.createElement('p');
                qrTitle.textContent = `Table ${i}`;
                qrDiv.appendChild(qrTitle);

                const qrCode = new QRCode(qrDiv, {
                    text: `https://infs3202-896d4464.uqcloud.net/scanorder/menu?table=${i}`,
                    width: 128,
                    height: 128,
                    colorDark: "#000000",
                    colorLight: "#ffffff",
                    correctLevel: QRCode.CorrectLevel.H
                });

                qrCodesDiv.appendChild(qrDiv);
            }
        }
    </script>
</main>

<?= $this->endSection() ?>