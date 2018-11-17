<?php
$url     = "http://192.168.30.122/Yekta_Getinformation.asmx?wsdl";
$context = stream_context_create(array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
));
$client = new SoapClient($url, array('stream_context' => $context));
$param = array('username' => 'admin','password' => 'admin','feature' => 'SOAP_SINGLE_ELEMENT_ARRAYS');
$param2 = array('username' => 'admin','password' => 'admin','feature' => 'SOAP_SINGLE_ELEMENT_ARRAYS' , 'SerialNumberGroup' => $id , 'verifyhost' => false);
$result2  = $client->GetKalaGroupVaragh($param2);
$outterArray2  = ((array)$result2);
$innerArray2  = ((array)$outterArray2['GetKalaGroupVaraghResult']);
$dataArray2  = ((array)$innerArray2['listObject']);
$array2 = json_decode(json_encode($dataArray2), True);
?>
<div class="container py-5 px-3">
    <table id="table_id" class="display rtl">
        <thead>
        <tr>
            <th>کدکالا</th>
            <th>نام محصول</th>
            <th>آلیاژ</th>
            <th>عرض</th>
            <th>نوع</th>
            <th>کارخانه</th>
            <th>کیفیت</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($array2['OPMViewKala'] as $item) {
            echo "<tr>";
            echo "<th>". $item['KlaVcCode'] . "</th>";
            echo "<th>". $item['klaName'] . "</th>";
            $dataArray3  = array_values($item['ListKalaProperties'])[0];
            foreach ($dataArray3 as $key) {
                echo "<th>". $key['ProDetail']. "</th>";
            }
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
