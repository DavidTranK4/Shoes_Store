<h1>Lịch Sử</h1>
<table class="table">
    <thead>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Ngày Mua</th>
            <th>Tổng Tiền</th>
            <th>Trang Thái</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lichsu as $ls): ?>
        <tr>
            <td><?=$ls['madh']?></td>
            <td><?=$ls['ngaymua']?></td>
            <td><?=$ls['tongtien']?></td>
            <td>
                <?php switch ($ls['trangthai']) {
                    case 'gio-hang':
                        echo '<span class="badge text-bg-danger">ĐANG MUA</span>';
                        break;
                    case 'chuan-bi':
                        echo '<span class="badge text-bg-info">ĐANG XỬ LÝ ĐƠN HÀNG</span>';
                        break;
                    case 'cho-giao':
                        echo '<span class="badge text-bg-success">ĐANG CHỜ GIAO</span>';
                        break;
                    
                    default:
                        # code...
                        break;
                }
                ?>
                
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>