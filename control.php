<?php

include_once('../admin/model.php');

class control extends model
{
    function __construct()
    {
        model::__construct();

        date_default_timezone_set("asia/calcutta");

        $url=$_SERVER['PATH_INFO'];
        switch($url)
        {
            case'/index':
            include_once('index.php');
            break;

            case'/login':
                
            if(isset($_REQUEST['login']))
            {
                $cust_email=$_REQUEST['cust_email'];
                $cust_pass=$_REQUEST['cust_pass'];

                $Where=array("cust_email"=>$cust_email,"cust_pass"=>$cust_pass);


                $res=$this->select_Where('customer',$where);
                $chk=$res->num_rows; 



                

                if($chk==1)//1 means true and 0 means false
                {

                    $fetch=$res->fetch_object();
                    $_SESSION['id']=$fetch->id;
                    $_SESSION['name']=$fetch->name;


                    echo "<script>
                            alert('login success !');
                            window.location='';
                            </script>";
                        }
                        else
                        {
                            echo "<script>
                                    alert('login Failed due to wrong creadential');
                                    window.location='login';
                                </script>"; 
                        }
                    }

            include_once('login.php');
            break;

            case'/signup':
            if(isset($_REQUEST['signup']))
                {
                    $cust_name=$_REQUEST['cust_name'];
                    $cust_email=$_REQUEST['cust_email'];
                    $cust_pass=$_REQUEST['cust_pass'];
                    $cust_mobile=$_REQUEST['cust_mobile'];

                    $img=$_FILES['img']['name'];
					$path='../admin/assets/img/customer/'.$img;
					$copy_file=$_FILES['img']['tmp_name'];
					move_uploaded_file($copy_file,$path);
            
                    $created_at=date("Y-m-d H:i:s");
                    $updated_at=date("Y-m-d H:i:s");

                    $arr=array("cust_name"=>$cust_name,"cust_email"=>$cust_email, "cust_pass"=>$cust_pass,"cust_mobile"=>$cust_mobile,"img"=>$img,"created_at"=>$created_at,"updated_at"=>$updated_at);
                    $res=$this->insert('customer',$arr);
                    if($res)
                    {
                        echo "<script>
                                alert('submit success !');
                                window.location='signup';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                                alert(' Failed !');
                                window.location='signup';
                            </script>"; 
                    }
                }
            include_once('signup.php');
            break;

            case'/product':
            include_once('product.php');
            break;

            case'/manage_product':
            include_once('manage_product.php');
            break;


            case'/contact':
                if(isset($_REQUEST['submit']))
                {
                    $name=$_REQUEST['name'];
                    $email=$_REQUEST['email'];
                    $comment=$_REQUEST['comment'];

                    $created_at=date("Y-m-d H:i:s");
                    $updated_at=date("Y-m-d H:i:s");

                    $arr=array("name"=>$name,"email"=>$email, "comment"=>$comment,"created_at"=>$created_at,"updated_at"=>$updated_at);

                    $res=$this->insert('inquiry',$arr);
                    if($res)
                    {
                        echo "<script>
                                alert('Inquiry submit success !');
                                window.location='contact';
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                                alert('Inquiry Failed !');
                                window.location='contact';
                            </script>"; 
                    }
                }
            include_once('contact.php');
            break;

            case'/blog':
            include_once('blog.php');
            break;

            case'/about':
            include_once('about.php');
            break;

            case'/add_cart':
            include_once('add_cart.php');
            break;

            case'/manage_cart':
            include_once('manage_cart.php');
            break;
        }
    }
}
$obj=new control;
?>