<?php include_once 'inc/header.php';?>
            <div class="grid_12">
            
                <div class="module">
                    <?php
                        if (!isset($_GET['id_hoa'])) {
                            header("location: index.php");
                            exit();
                        }

                        $id_hoa = $_GET['id_hoa'];

                        $query = "SELECT * FROM hoa WHERE id_hoa = {$id_hoa}";

                        $result = $mysqli->query($query);

                        $arHoa = mysqli_fetch_assoc($result);

                        $ten_hoa = $arHoa['ten_hoa'];
                        $mo_ta = $arHoa['mo_ta'];
                        $hinh_anh = $arHoa['hinh_anh'];
                        $gia_ban = $arHoa['gia_ban'];
                        $id_cat = $arHoa['id_cat'];
                    ?>
                     <h2><span>Sửa sản phẩm</span></h2>
                        
                     <div class="module-body">
                        <form action="">
                            <p>
                                <label>Tên hoa</label>
                                <input type="text" class="input-medium" value="<?php echo $ten_hoa; ?>" />
                            </p>
                            
							<p>
                                <label>Hình ảnh</label>
                                <br />
                                <img src="images/tmp/<?php echo $hinh_anh; ?>" alt="<?php echo $hinh_anh; ?>" width="100px" /><br />
                                <input type="file" value="" />
                            </p>
                            
                            <p>
                                <label>Giá bán</label>
                                <input type="text" class="input-medium" value="<?php echo $gia_ban; ?>" /> VNĐ
                            </p>
                            
                            <p>
                                <label>Mô tả</label>
                                <textarea rows="7" cols="90" class="input-medium"><?php echo $mo_ta; ?></textarea>
                            </p>
                                
                            <fieldset>
                                <input class="submit-green" type="submit" value="Sửa" /> 
                                <input class="submit-gray" type="submit" value="Nhập lại" />
                            </fieldset>
                        </form>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
<?php include_once 'inc/footer.php'?> 