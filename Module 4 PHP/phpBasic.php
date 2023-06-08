<?php

//Part 6
$day='Saturday';

if($day === 'Friday' || $day==='Saturday'){
    echo 'Today is holiday';
}
else{
    echo 'Today is not';
}
echo'</br>';

//Part 7
$array1=['Sajjad',200101013, 3.51];
echo $array1[0];
echo'</br>';

//part 8
$array2=[
    'first-name' => 'Sajjad',
    'last-name' => 'Hossain',
    'nationality' => 'Bangladeshi',
    'age' => 23
];
echo $array2['nationality'];
echo'</br>';

//part 9
$array3=[
    'first_name' => 'Sajjad',
    'last_name' => 'Hossain',
    'address' => [
        'street_address'=>'House 9, road 3',
        'country'=>'Bangladesh',
        'city'=>'Dhaka',
        'zipcode'=>'1200'
    ],
    'mobile_number'=>[
        'country_prefix'=> '880',
        'grameenphone'=>[
            'gp1'=>'01700000000',
            'gp2'=>'01712345678'
        ]
    ]
];
echo $array3['mobile_number']['grameenphone']['gp1'];

//part 10
