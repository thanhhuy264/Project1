<?php
require_once("../model/function.php");
$db = new Database();
include_once("../core/app.php");
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'products':
                $table = $_GET['act'];
                $data_ctr = $db->getObject('category');
                $data_brand = $db->getObject('brand');
                $data = $db->getObject($table);
                $VIEW_NAME = '../view/admin/product/list.php';
                if (isset($_GET['delete'])) {
                    $id = (int)$_GET['delete'];
                    if ($db->delete($table, $id, 'idProduct')) {
                        $message = "Xoá thành công";
                    } else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=products");
                }
                if (isset($_GET['edit'])) {
                    $id = (int)$_GET['edit'];
                    $data = $db->getRowObject($table, $id, 'idProduct');
                    $getName = $data->nameProduct;
                    $VIEW_NAME = '../view/admin/product/edit.php';
                    if (isset($_POST['update']) && ($_POST['update'])) {
                        $data = [
                            'nameProduct' => $_POST['nameProduct'],
                            'idCategory' => $_POST['idCategory'],
                            'idBrand' => $_POST['idBrand'],
                            'imgUrl' => $_POST['imgUrl'],
                            'flashSale' => $_POST['flashSale'],
                            'note' => $_POST['note'],
                        ];
                        if ($db->update($table, $data, $id, 'idProduct'))
                            $message = "Cập nhật thành công";

                        else $message = "Không thể thực hiện";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("Refresh:0; url=?act=products");
                    }
                }
                if (isset($_GET['new'])) { 
                    $VIEW_NAME ='../view/admin/product/new.php';
                    if (isset($_POST['update']) && ($_POST['update'])) {
                        $data = [
                            'nameProduct' => $_POST['nameProduct'],
                            'idCategory' => $_POST['idCategory'],
                            'idBrand' => $_POST['idBrand'],
                            'imgUrl' => $_POST['imgUrl'],
                            'flashSale' => $_POST['flashSale'],
                            'note' => $_POST['note'],
                        ];
                        if ($db->insert($table, $data))
                            $message = "Cập nhật thành công";
                        else $message = "Không thể thực hiện";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header("Refresh:0; url=?act=products");
                    }
                }
        break;
        case 'category': 
            $table = $_GET['act'];
            $data = $db->getObject($table);
            $VIEW_NAME = '../view/admin/category/list.php';
            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                if ($db->delete($table, $id, 'idCategory')) {
                    $message = "Xoá thành công";
                } else $message = "Không thể thực hiện";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Refresh:0; url=?act=category");
            }
            if (isset($_GET['edit'])) {
                $id = (int)$_GET['edit'];
                $data = $db->getRowObject($table, $id, 'idCategory');
                $getName = $data->nameCategory;
                $VIEW_NAME = '../view/admin/category/edit.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'nameCategory' => $_POST['nameCategory'],
                        'idGroupProduct' => $_POST['idGroupProduct']
                    ];
                    if ($db->update($table, $data, $id, 'idCategory'))
                        $message = "Cập nhật thành công";

                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=category");
                }
            }
            if (isset($_GET['new'])) { 
                $VIEW_NAME ='../view/admin/category/new.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'nameCategory' => $_POST['nameProduct'],
                        'nameGroupProduct' => $_POST['nameGroupProduct']
                    ];
                    if ($db->insert($table, $data))
                        $message = "Cập nhật thành công";
                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=category");
                }
            }
        break;
        case 'groupproduct': 
            $table = $_GET['act'];
            $data = $db->getObject($table);
            $VIEW_NAME = '../view/admin/groupproduct/list.php';
            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                if ($db->delete($table, $id, 'idGroupProduct')) {
                    $message = "Xoá thành công";
                } else $message = "Không thể thực hiện";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Refresh:0; url=?act=groupproduct");
            }
            if (isset($_GET['edit'])) {
                $id = (int)$_GET['edit'];
                $data = $db->getRowObject($table, $id, 'idGroupProduct');
                $getName = $data->nameGroupProduct;
                $VIEW_NAME = '../view/admin/groupproduct/edit.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'nameGroupProduct' => $_POST['nameGroupProduct'],
                      
                    ];
                    if ($db->update($table, $data, $id, 'idGroupProduct'))
                        $message = "Cập nhật thành công";

                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=groupproduct");
                }
            }
            if (isset($_GET['new'])) { 
                $VIEW_NAME ='../view/admin/groupproduct/new.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'nameGroupProduct' => $_POST['nameGroupProduct']
                    ];
                    if ($db->insert($table, $data))
                        $message = "Cập nhật thành công";
                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=groupproduct");
                }
            }
        break;
        case 'brand': 
            $table = $_GET['act'];
            $data = $db->getObject($table);
            $VIEW_NAME = '../view/admin/brand/list.php';
            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                if ($db->delete($table, $id, 'idThuongHieu')) {
                    $message = "Xoá thành công";
                } else $message = "Không thể thực hiện";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Refresh:0; url=?act=brand");
            }
            if (isset($_GET['edit'])) {
                $id = (int)$_GET['edit'];
                $data = $db->getRowObject($table, $id, 'idThuongHieu');
                $getName = $data->nameBrand;
                $VIEW_NAME = '../view/admin/brand/edit.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'nameBrand' => $_POST['nameBrand'],
                      
                    ];
                    if ($db->update($table, $data, $id, 'idThuongHieu'))
                        $message = "Cập nhật thành công";

                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=brand");
                }
            }
            if (isset($_GET['new'])) { 
                $VIEW_NAME ='../view/admin/brand/new.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'nameBrand' => $_POST['nameBrand']
                    ];
                    if ($db->insert($table, $data))
                        $message = "Cập nhật thành công";
                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=brand");
                }
            }
        break;
        case 'productdetail': 
            $data_prd = $db->getObject('products');
            $table = $_GET['act'];
            $data = $db->getObject($table);
            $VIEW_NAME = '../view/admin/productDetail/list.php';
            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                if ($db->delete($table, $id, 'idProductDetail')) {
                    $message = "Xoá thành công";
                } else $message = "Không thể thực hiện";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Refresh:0; url=?act=productdetail");
            }
            if (isset($_GET['edit'])) {
                $id = (int)$_GET['edit'];
                $data = $db->getRowObject($table, $id, 'idProductDetail');
                $idPRD = (int)$data->idProduct;
                $namePRD = $db->getRowObject('products',$idPRD,'idProduct');
                $getName = $namePRD->nameProduct;
                $VIEW_NAME = '../view/admin/productDetail/edit.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'idProduct' => $_POST['idProduct'],
                        'color' => $_POST['color'],
                        'size' => $_POST['price'],
                        'oldPrice' => $_POST['oldPrice'],
                        'imgUrl' => $_POST['imgUrl'],
                        'quantity' => $_POST['quantity']
                      
                    ];
                    if ($db->update($table, $data, $id, 'idProductDetail'))
                        $message = "Cập nhật thành công";

                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=productdetail");
                }
            }
            if (isset($_GET['new'])) { 
                $VIEW_NAME ='../view/admin/productDetail/new.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'idProduct' => $_POST['idProduct'],
                        'color' => $_POST['color'],
                        'size' => $_POST['size'],
                        'price' => $_POST['price'],
                        'oldPrice' => $_POST['oldPrice'],
                        'imgUrl' => $_POST['imgUrl'],
                        'quantity' => $_POST['quantity']
                    ];
                    if ($db->insert($table, $data))
                        $message = "Cập nhật thành công";
                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=productdetail");
                }
            }
        break;
        case 'user': 
            $table = $_GET['act'];
            $data_role =$db->getObject('role');
            $data = $db->getObject($table);
            $VIEW_NAME = '../view/admin/user/list.php';
            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                if ($db->delete($table, $id, 'idUser')) {
                    $message = "Xoá thành công";
                } else $message = "Không thể thực hiện";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Refresh:0; url=?act=user");
            }
            if (isset($_GET['edit'])) {
                $id = (int)$_GET['edit'];
                $data = $db->getRowObject($table, $id, 'idUser');
                $getName = $data->fullName;
                $VIEW_NAME = '../view/admin/user/edit.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'idRole' => $_POST['idRole'],
                      
                    ];
                    if ($db->update($table, $data, $id, 'idUser'))
                        $message = "Cập nhật thành công";

                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=user");
                }
            }
        break;
        case 'user': 
            $table = $_GET['act'];
            $data_role =$db->getObject('role');
            $data = $db->getObject($table);
            $VIEW_NAME = '../view/admin/user/list.php';
            if (isset($_GET['delete'])) {
                $id = (int)$_GET['delete'];
                if ($db->delete($table, $id, 'idUser')) {
                    $message = "Xoá thành công";
                } else $message = "Không thể thực hiện";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header("Refresh:0; url=?act=user");
            }
            if (isset($_GET['edit'])) {
                $id = (int)$_GET['edit'];
                $data = $db->getRowObject($table, $id, 'idUser');
                $getName = $data->fullName;
                $VIEW_NAME = '../view/admin/user/edit.php';
                if (isset($_POST['update']) && ($_POST['update'])) {
                    $data = [
                        'idRole' => $_POST['idRole'],
                      
                    ];
                    if ($db->update($table, $data, $id, 'idUser'))
                        $message = "Cập nhật thành công";

                    else $message = "Không thể thực hiện";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    header("Refresh:0; url=?act=user");
                }
            }
        break;
        default: require '../view/admin/home/home.php';
        break;

    }       
} else {
    $VIEW_NAME = '../view/admin/home/home.php';
}
include_once('../view/admin/layout.php');
