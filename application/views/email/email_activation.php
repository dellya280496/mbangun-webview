<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('email/_header', ['title' => 'M-bangun']); ?>
    <!-- START CENTERED WHITE CONTAINER -->
    <table role="presentation" class="main">
        <!-- START MAIN CONTENT AREA -->
        <tr>
            <td class="wrapper">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td>
                            <h1 style="text-decoration: none; font-size: 24px;line-height: 28px;font-weight: bold; color: #2ed234">Selamat</h1>
                            <div class="mailcontent" style="line-height: 26px;font-size: 14px;">
                                <p style='text-align: center'>
                                    Anda Berhasil membuka Toko (<?php echo $nama_toko ?>) di M-Bangun<br>
                                </p>
                                
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- END MAIN CONTENT AREA -->
    </table>
<?php $this->load->view('email/_footer'); ?>
