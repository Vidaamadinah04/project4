<!DOCTYPE html>
<html>
<head>
    <title>Lihat Gudang C</title>
    <style>
        /* Gaya untuk tampilan gudang */
        .gudang {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            background-color: #f9f9f9;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .gudang h3 {
            margin-top: 0;
            font-size: 20px;
            color: #333;
        }
        /* Gaya untuk tampilan stokin, stokout, dan stok barang */
        .stok {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .stok h4 {
            margin-top: 0;
            font-size: 16px;
            color: #555;
        }
        .stok ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .stok li {
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Lihat Gudang C</h1>
    <div class="gudang">
        <h3>Gudang C</h3>
        <div class="stok">
            <h4>Stok In</h4>
            <ul id="stokInGudangC">
                <li>Item 1: 100 pcs</li>
                <li>Item 2: 50 pcs</li>
            </ul>
        </div>
        <div class="stok">
            <h4>Stok Out</h4>
            <ul id="stokOutGudangC">
                <li>Item 1: 30 pcs</li>
                <li>Item 2: 20 pcs</li>
            </ul>
        </div>
        <div class="stok">
            <h4>Stok Barang</h4>
            <ul id="stokBarangGudangC">
                <li>Item 1: 70 pcs</li>
                <li>Item 2: 30 pcs</li>
            </ul>
        </div>
    </div>
</body>
</html>
