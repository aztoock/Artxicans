<?php 

    # Contador de Pedidos
    
    # Contador de Vendedores
    $query2 = mysqli_query($conn,"SELECT COUNT(*) sellers FROM reg_sellers WHERE solicitud = 'Aprobado'");
    $data2 = mysqli_fetch_array($query2);
    $sellers = $data2['sellers'];
    
    # Contador de Productos
    $query3 = mysqli_query($conn,"SELECT COUNT(*) productsT FROM products");
    $data3 = mysqli_fetch_array($query3);
    $products = $data3['productsT'];

    # Contador de Reportes 
    $query4 = mysqli_query($conn,"SELECT  COUNT(*) reportes FROM reports");
    $data4 = mysqli_fetch_array($query4);
    $reports = $data4['reportes'];
    
    # Contador de solicitudes de vendedores
    $query5 = mysqli_query($conn,"SELECT COUNT(*) solicitudes FROM reg_sellers WHERE solicitud = 'Pendiente'");
    $data5 = mysqli_fetch_array($query5);
    $req_sellers = $data5['solicitudes'];

    # Contador de solicitudes de productos
?>