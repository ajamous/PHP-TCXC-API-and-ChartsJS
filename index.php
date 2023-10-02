<?php

// Enable error reporting for troubleshooting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Sample JSON data (you'd typically fetch this from the telecomsxchange API)
$jsonString = '{
  "status": "success",
  "cdrs": [
    {
      "i_cdr": "524807884",
      "CLD": "982398239823",
      "CLI": "+971533309344",
      "call_id": "0edc2626fe9311e99c4f002590d192ea@195.219.39.14-b2b_1",
      "duration": "0",
      "billed_duration": null,
      "connect_time": "2019-11-03 23:38:37",
      "disconnect_time": "2019-11-03 23:38:37",
      "setup_time": "2019-11-03 23:38:37",
      "billing_prefix": "982",
      "billing_price_1": 0.029,
      "billing_price_n": 0.029,
      "billing_interval_1": "1",
      "billing_interval_n": "1",
      "customer_amount": "0.000000",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "423",
      "i_connection": "1088",
      "i_purchased_route": "97967",
      "disconnect_code": "63",
      "customer_ip": "204.110.52.136",
      "i_rate": "114110752",
      "vendor_name": "dwci",
      "account_name": "CloudSW",
      "connection_name": "TDM -HD",
      "disconnect_reason": "Service or option not available, unspecified",
      "country_name": "IRAN",
      "description": "Fixed - ROC"
    },
    {
      "i_cdr": "524807881",
      "CLD": "982398239823",
      "CLI": "+971521474726",
      "call_id": "7c2301a6fe9211e996860cc47ab0b860@195.219.39.9-b2b_1",
      "duration": "0",
      "billed_duration": null,
      "connect_time": "2019-11-03 23:38:24",
      "disconnect_time": "2019-11-03 23:38:24",
      "setup_time": "2019-11-03 23:38:24",
      "billing_prefix": "982",
      "billing_price_1": 0.029,
      "billing_price_n": 0.029,
      "billing_interval_1": "1",
      "billing_interval_n": "1",
      "customer_amount": "0.000000",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "423",
      "i_connection": "1088",
      "i_purchased_route": "97967",
      "disconnect_code": "63",
      "customer_ip": "204.110.52.136",
      "i_rate": "114110752",
      "vendor_name": "dwci",
      "account_name": "CloudSW",
      "connection_name": "TDM -HD",
      "disconnect_reason": "Service or option not available, unspecified",
      "country_name": "IRAN",
      "description": "Fixed - ROC"
    },
    {
      "i_cdr": "524807879",
      "CLD": "982398239823",
      "CLI": "+971511178771",
      "call_id": "00b466d0fe9311e99c3c002590d192ea@195.219.39.14-b2b_1",
      "duration": "0",
      "billed_duration": null,
      "connect_time": "2019-11-03 23:38:13",
      "disconnect_time": "2019-11-03 23:38:13",
      "setup_time": "2019-11-03 23:38:13",
      "billing_prefix": "982",
      "billing_price_1": 0.029,
      "billing_price_n": 0.029,
      "billing_interval_1": "1",
      "billing_interval_n": "1",
      "customer_amount": "0.000000",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "423",
      "i_connection": "1088",
      "i_purchased_route": "97967",
      "disconnect_code": "63",
      "customer_ip": "204.110.52.136",
      "i_rate": "114110752",
      "vendor_name": "dwci",
      "account_name": "CloudSW",
      "connection_name": "TDM -HD",
      "disconnect_reason": "Service or option not available, unspecified",
      "country_name": "IRAN",
      "description": "Fixed - ROC"
    },
    {
      "i_cdr": "524807872",
      "CLD": "201063410640",
      "CLI": "74122754",
      "call_id": "bfhbiajijwzqcb7586345@161.129.155.100-b2b_1-b2b_1",
      "duration": "0",
      "billed_duration": null,
      "connect_time": "2019-11-03 23:37:45",
      "disconnect_time": "2019-11-03 23:37:45",
      "setup_time": "2019-11-03 23:37:40",
      "billing_prefix": "2010",
      "billing_price_1": 0.089,
      "billing_price_n": 0.089,
      "billing_interval_1": "1",
      "billing_interval_n": "1",
      "customer_amount": "0.000000",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "406",
      "i_connection": "1112",
      "i_purchased_route": "101673",
      "disconnect_code": "63",
      "customer_ip": "204.110.52.136",
      "i_rate": "117339532",
      "vendor_name": "Teltorhub",
      "account_name": "CloudSW",
      "connection_name": "TDM",
      "disconnect_reason": "Service or option not available, unspecified",
      "country_name": "EGYPT",
      "description": "Mobile - Vodafone"
    },
        {
      "i_cdr": "119081892",
      "CLD": "962790000001",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "JT",
      "account_name": "CloudSW",
      "connection_name": "JT",
      "disconnect_reason": "Normal call clearing",
      "country_name": "Jordan ",
      "description": " Mobile Zain"
    },
      {
      "i_cdr": "119081892",
      "CLD": "962790000001",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "JT",
      "account_name": "CloudSW",
      "connection_name": "JT",
      "disconnect_reason": "Normal call clearing",
      "country_name": "Jordan ",
      "description": " Mobile Zain"
    },
      {
      "i_cdr": "119081892",
      "CLD": "962790000001",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "JT",
      "account_name": "CloudSW",
      "connection_name": "JT",
      "disconnect_reason": "Normal call clearing",
      "country_name": "Jordan ",
      "description": " Mobile Zain"
    },
      {
      "i_cdr": "119081892",
      "CLD": "962790000001",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "JT",
      "account_name": "CloudSW",
      "connection_name": "JT",
      "disconnect_reason": "Normal call clearing",
      "country_name": "Jordan ",
      "description": " Mobile Zain"
    },
      {
      "i_cdr": "119081892",
      "CLD": "962790000001",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "JT",
      "account_name": "CloudSW",
      "connection_name": "JT",
      "disconnect_reason": "Normal call clearing",
      "country_name": "Jordan ",
      "description": " Mobile Zain"
    },
      {
      "i_cdr": "119081892",
      "CLD": "962790000001",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "JT",
      "account_name": "CloudSW",
      "connection_name": "JT",
      "disconnect_reason": "Normal call clearing",
      "country_name": "Jordan ",
      "description": " Mobile Zain"
    },
      {
      "i_cdr": "119081892",
      "CLD": "962790000001",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "JT",
      "account_name": "CloudSW",
      "connection_name": "JT",
      "disconnect_reason": "Normal call clearing",
      "country_name": "Jordan ",
      "description": " Mobile Zain"
    },
    {
      "i_cdr": "119081892",
      "CLD": "16512360030",
      "CLI": "19094130765",
      "call_id": "2a1d131f3a5e24d060f7124542e393d7@104.155.11.106:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:52",
      "disconnect_time": "2019-11-03 23:37:59",
      "setup_time": "2019-11-03 23:37:35",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "PureTelephone",
      "account_name": "CloudSW",
      "connection_name": "USA CLI (OVH)",
      "disconnect_reason": "Normal call clearing",
      "country_name": "UNITED STATES OF AMERICA",
      "description": "Minnesota"
    },
    {
      "i_cdr": "119081887",
      "CLD": "19252755054",
      "CLI": "15103450898",
      "call_id": "4baf970e0535eb8547f90e3375ef7f1d@130.211.60.220:5060-b2b_1-b2b_1",
      "duration": "7",
      "billed_duration": "12",
      "connect_time": "2019-11-03 23:37:14",
      "disconnect_time": "2019-11-03 23:37:21",
      "setup_time": "2019-11-03 23:37:10",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000680",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "PureTelephone",
      "account_name": "CloudSW",
      "connection_name": "USA CLI (OVH)",
      "disconnect_reason": "Normal call clearing",
      "country_name": "UNITED STATES OF AMERICA",
      "description": "California"
    },
    {
      "i_cdr": "119081884",
      "CLD": "18189399840",
      "CLI": "19094130765",
      "call_id": "6a1aff7d19b8c99216926f71434e110f@104.155.90.228:5060-b2b_1-b2b_1",
      "duration": "2",
      "billed_duration": "6",
      "connect_time": "2019-11-03 23:37:02",
      "disconnect_time": "2019-11-03 23:37:04",
      "setup_time": "2019-11-03 23:36:29",
      "billing_prefix": "1",
      "billing_price_1": 0.0034,
      "billing_price_n": 0.0034,
      "billing_interval_1": "6",
      "billing_interval_n": "6",
      "customer_amount": "0.000340",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "297",
      "i_connection": "862",
      "i_purchased_route": "90959",
      "disconnect_code": "16",
      "customer_ip": "204.110.52.136",
      "i_rate": "59701436",
      "vendor_name": "PureTelephone",
      "account_name": "CloudSW",
      "connection_name": "USA CLI (OVH)",
      "disconnect_reason": "Normal call clearing",
      "country_name": "UNITED STATES OF AMERICA",
      "description": "California"
    },
    {
      "i_cdr": "524807841",
      "CLD": "982398239823",
      "CLI": "+971569945609",
      "call_id": "34b92d04fe9211e98e7b0cc47ab0b860@195.219.39.9-b2b_1",
      "duration": "0",
      "billed_duration": null,
      "connect_time": "2019-11-03 23:36:24",
      "disconnect_time": "2019-11-03 23:36:24",
      "setup_time": "2019-11-03 23:36:24",
      "billing_prefix": "982",
      "billing_price_1": 0.029,
      "billing_price_n": 0.029,
      "billing_interval_1": "1",
      "billing_interval_n": "1",
      "customer_amount": "0.000000",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "423",
      "i_connection": "1088",
      "i_purchased_route": "97967",
      "disconnect_code": "63",
      "customer_ip": "204.110.52.136",
      "i_rate": "114110752",
      "vendor_name": "dwci",
      "account_name": "CloudSW",
      "connection_name": "TDM -HD",
      "disconnect_reason": "Service or option not available, unspecified",
      "country_name": "IRAN",
      "description": "Fixed - ROC"
    },
    {
      "i_cdr": "524807833",
      "CLD": "982398239823",
      "CLI": "+971505584498",
      "call_id": "b926b1b0fe9211e99b37002590d192ea@195.219.39.14-b2b_1",
      "duration": "0",
      "billed_duration": null,
      "connect_time": "2019-11-03 23:36:13",
      "disconnect_time": "2019-11-03 23:36:13",
      "setup_time": "2019-11-03 23:36:13",
      "billing_prefix": "982",
      "billing_price_1": 0.029,
      "billing_price_n": 0.029,
      "billing_interval_1": "1",
      "billing_interval_n": "1",
      "customer_amount": "0.000000",
      "i_customer": "1014",
      "i_account": "1022",
      "i_vendor": "423",
      "i_connection": "1088",
      "i_purchased_route": "97967",
      "disconnect_code": "63",
      "customer_ip": "204.110.52.136",
      "i_rate": "114110752",
      "vendor_name": "dwci",
      "account_name": "CloudSW",
      "connection_name": "TDM -HD",
      "disconnect_reason": "Service or option not available, unspecified",
      "country_name": "IRAN",
      "description": "Fixed - ROC"
     }
  ]
}'; // Your JSON data here

$data = json_decode($jsonString, true);

$vendors = [];
$countriesCount = [];

foreach ($data['cdrs'] as $cdr) {
    $vendor = $cdr['vendor_name'];
    $country = $cdr['country_name'];
    
    if (!isset($vendors[$vendor])) {
        $vendors[$vendor] = 0;
    }
    $vendors[$vendor]++;
    
    if (!isset($countriesCount[$country])) {
        $countriesCount[$country] = 0;
    }
    $countriesCount[$country]++;
}

// Sort both arrays by frequency
arsort($vendors);
arsort($countriesCount);

// Take top 5 from both
$topVendors = array_slice($vendors, 0, 5, true);
$topCountries = array_slice($countriesCount, 0, 5, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecomsxchange Data Visualization</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

<canvas id="myChart" width="400" height="200"></canvas>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [...<?php echo json_encode(array_keys($topVendors)); ?>, ...<?php echo json_encode(array_keys($topCountries)); ?>],
            datasets: [{
                label: 'Top Calls by Vendor',
                data: [...<?php echo json_encode(array_values($topVendors)); ?>, ...Array(<?php echo count($topCountries); ?>).fill(0)],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            },
            {
                label: 'Top Calls by Country',
                data: [...Array(<?php echo count($topVendors); ?>).fill(0), ...<?php echo json_encode(array_values($topCountries)); ?>],
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Top Vendors and Countries Sorted By Calls Count',
                fontSize: 20,
                fontColor: '#fff'
            },
            legend: {
                display: true,
                position: 'top',
                labels: {
                    fontColor: '#fff',
                    boxWidth: 20
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        fontColor: '#fff'
                    },
                    gridLines: {
                        color: 'rgba(200,200,200,0.05)',
                        zeroLineColor: 'rgba(200,200,200,0.5)'
                    }
                },
                x: {
                    ticks: {
                        fontColor: '#fff'
                    },
                    gridLines: {
                        color: 'rgba(200,200,200,0.05)'
                    }
                }
            },
            tooltips: {
                mode: 'index',
                intersect: false,
                backgroundColor: 'rgba(0,0,0,0.7)',
                titleFontColor: '#fff',
                bodyFontColor: '#fff',
                borderColor: 'rgba(255,255,255,0.3)',
                borderWidth: 1,
                cornerRadius: 5
            }
        }
    });
</script>

</body>
</html>
