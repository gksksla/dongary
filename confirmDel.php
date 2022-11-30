<?
    include "lib.php";

    
    $idx = $_GET['idx']; 
    $idx = mysqli_real_escape_string($connect, $idx); 
 

?>

<!--idx번 게시물을 삭제할건지 경고창을 띠웁니다-->
<form action="del.php" method="post"> 
    <input type="hidden" name="idx" value="<?=$idx?>">
    <table width=800 border="1" cellpadding=5 >

    <tr>
            <th colspan=2> <?=$idx?>번 게시물을 정말 삭제할까요? </th> 
            
        </tr>

        <tr>
            <th> 비밀번호 </th> 
            <td> <input type="password" name="pwd" placeholder="비밀번호"  size=20 > </td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="text-align:center; ">
                        <input type="submit" value="저장">
                </div> 
            </td>
        </tr>
    </table>
</form>