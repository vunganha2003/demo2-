<?php
// Câu 1. Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function checkEven($n){
    if($n % 2 == 0){
        echo "$n là số chẵn <br>";
    } else {
        echo "$nu không phải là số chẵn <br>";
    }
} 
echo "<b> Câu 1: </b>";
checkEven(6); 


// Câu 2. Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function sumUpToN($n){
    $numberArray = range(1, $n); // Tạo một mảng chứa các số từ 1 đến n
    $sum = array_sum($numberArray); // Tính tổng của mảng số
    echo "Tổng các số từ 1 đến $n là: $sum <br>";
}
echo "<br><b> Câu 2: </b>";
sumUpToN(5);


// Câu 3. Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function multiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
      for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "$i x $j = $result <br>";
    }
      echo "<br>";
    }
}
echo "<br><b> Câu 3: BẢNG CỬU CHƯƠNG</b><br>";
multiplicationTable();


// Câu 4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function containsWord($string, $word) {
    if (strpos($string, $word) !== false) {
        echo "Chuỗi \"$string\" chứa từ \"$word\"";
    } else {
        echo "Chuỗi \"$string\" không chứa từ \"$word\"";
    }
}
echo "<b> Câu 4: </b>";
$string = "Vũ Ngân Hà";
$wordToCheck = "Hà";
containsWord($string, $wordToCheck);


// Câu 5. Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array) {
    $min = min($array); // Tìm giá trị nhỏ nhất trong mảng
    $max = max($array); // Tìm giá trị lớn nhất trong mảng
    echo "<br>- Giá trị nhỏ nhất trong mảng là: " . $min;
    echo "<br>- Giá trị lớn nhất trong mảng là: " . $max;
}
echo "<br><br><b> Câu 5: </b>";
$array = array(11, 7, 1, 22, 6, 9, 4); 
findMinMax($array);


// Câu 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sortedInAscendingOrder($array) {
    sort($array);
    echo "Mảng đã sắp xếp theo thứ tự tăng dần là: " . implode(', ', $array);
}
echo "<br><br><b> Câu 6: </b>";
$numberArray = array(4, 2, 8, 6, 10);
$sortedArray = sortedInAscendingOrder($numberArray);


// Câu 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function calculateFactorial($n) {
    if (is_numeric($n) && is_int($n) && $n > 0) { // Nếu n là một số, một số nguyên và lớn hơn 0
        return $n * calculateFactorial($n - 1); 
    }
    else if ($n == 0) {
        return 1; // Giai thừa của 0 và 1 bằng 1
    } else {
        return "Không tồn tại!!!";
    }
}
echo "<br><br><b> Câu 7: </b>";
$numberToCalculate = 0; 
$factorial = calculateFactorial($numberToCalculate);
echo "Giai thừa của " . $numberToCalculate . ": " . $factorial;


// Câu 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function isPrime($n){ //Hàm kiểm tra số nguyên tố
    if (is_numeric($n) && is_int($n) && $n >= 2) {
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }  
        }
        return true; 
    } else {
        return false;
    }
}

function findPrimesInRange($start, $end) { //Hàm tìm số nguyên tố
    $primeNumbers = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primeNumbers[] = $i;
        }
    }
    return $primeNumbers;
}
echo "<br><br><b> Câu 8: </b>";
// Tìm và in ra các số nguyên tố trong một khoảng từ 1 đến 50
$startRange = 1;
$endRange = 50;
$primesInRange = findPrimesInRange($startRange, $endRange);
echo "Các số nguyên tố trong khoảng từ " . $startRange . " đến " . $endRange . " là: " . implode(", ", $primesInRange);


// Câu 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
function calculateSum($arr) {
    $sum = array_sum($arr); 
    return $sum;
}
echo "<br><br><b> Câu 9: </b>";
$numberArray = array(1, 2, 3, 4, 5); 
$sumOfArray = calculateSum($numberArray);
echo "Tổng của các số trong mảng là: " . calculateSum($numberArray);


// Câu 10. Viết chương trình PHP để in ra các số Fibonacci (bắt đầu bằng 0,1 và các số sau bằng tổng của hai số trước đó) trong một khoảng cho trước.
function printFibonacciInRange($n) {
    $fibonacciArray = array(0, 1);
    // Tạo chuỗi Fibonacci cho đến khi số cuối cùng trong chuỗi lớn hơn hoặc bằng n
    while (end($fibonacciArray) < $n) {
        $nextFibonacci = end($fibonacciArray) + prev($fibonacciArray);
        if ($nextFibonacci < $n) {
            $fibonacciArray[] = $nextFibonacci;
        } else {
            break;
        }
    }
    return $fibonacciArray;
}
echo "<br><br><b> Câu 10: </b>";
// In ra các số Fibonacci trong một khoảng từ 0 đến 100
$endRange = 100;
$fibonacciInRange = printFibonacciInRange($endRange);
echo "Các số Fibonacci trong khoảng từ 0 đến " . $endRange . " là: " . implode(", ", $fibonacciInRange);


// Câu 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong (là số bằng tổng lập phương các chữ số tạo nên nó) hay không.
function isArmstrongNumber($n) {
    $numValue = strval($n);
    $numDigits = strlen($numValue); //Số các chữ số
    $sum = 0;
    $tempNumber = $n; // Biến temNumber dùng khi thay đổi giá trị
    // Tính tổng lũy thừa của các chữ số
    while ($tempNumber != 0) {
        $digit = $tempNumber % 10;
        $sum += pow($digit, $numDigits); // Tổng lũy thừa của các chữ số
        $tempNumber = floor($tempNumber / 10);
    }
    // Kiểm tra xem số đó có phải là số Armstrong hay không
    if ($sum == $n) {
        return true; 
    } else {
        return false; 
    }
}
echo "<br><br><b> Câu 11: </b>";
$numberToCheck = 1634; 
// Kiểm tra xem số đó có phải là số Armstrong hay không và in kết quả
if (isArmstrongNumber($numberToCheck)) {
    echo $numberToCheck . " là số Armstrong.";
} else {
    echo $numberToCheck . " không phải là số Armstrong.";
}


// Câu 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($arr, $position, $value) {
    // Tạo một mảng tạm thời để lưu các phần tử sau khi chèn
    $newArray = array();
    for ($i = 0; $i < count($arr); $i++) {
        // Nếu đến vị trí chèn, thêm giá trị mới vào mảng tạm thời
        if ($i == $position) {
            $newArray[] = $value;
        }
        // Sao chép các phần tử từ mảng ban đầu vào mảng tạm thời
        $newArray[] = $arr[$i];
    }
    return $newArray;
}
echo "<br><br><b> Câu 12: </b>";
// Mảng ban đầu
$originalArray = array(1, 2, 3, 4, 5);
$insertPosition = 2;  // Vị trí cần chèn
$insertValue = 99; // Giá trị cần chèn

// Chèn giá trị vào mảng ở vị trí cần chèn
$newArray = insertElement($originalArray, $insertPosition, $insertValue);
// In mảng đã chèn
echo "Mảng đã chèn " . $insertValue . " vào vị tri thứ " . $insertPosition . " là: " . implode(', ', $newArray);


// Câu 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
    // Sử dụng hàm array_unique để loại bỏ các phần tử trùng lặp
    $arrayAfterRemoval = array_unique($array);
    return $arrayAfterRemoval;
}
echo "<br><br><b> Câu 13: </b>";
// Mảng ban đầu
$originalArray = array(1, 2, 2, 3, 4, 4, 5);
// Loại bỏ các phần tử trùng lặp từ mảng
$arrayAfterRemoval = removeDuplicates($originalArray);
echo "Mảng đã loại bỏ các phần tử trùng lặp là: " . implode(', ', $arrayAfterRemoval);


// Câu 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
function findElementIndex($array, $valueToFind) {
    // Sử dụng hàm array_search để tìm vị trí của phần tử trong mảng
    $index = array_search($valueToFind, $array);
    return $index;
}
echo "<br><br><b> Câu 14: </b>";
// Mảng ban đầu
$numberArray = array(1, 3, 5, 7, 9);
// Phần tử cần tìm
$valueToFind = 5;
// Tìm vị trí của phần tử trong mảng
$index = findElementIndex($numberArray, $valueToFind);
echo "Vị trí của phần tử $valueToFind trong mảng là: $index";


// Câu 15. Viết chương trình PHP để đảo ngược một chuỗi.
function reverseString($string) {
    // Sử dụng hàm strrev để đảo ngược chuỗi
    $reversedString = strrev($string);
    return $reversedString;
}
echo "<br><br><b> Câu 15: </b>";
// Chuỗi ban đầu
$stringToReverse = "Hello World";
// Đảo ngược chuỗi
$reversedString = reverseString($stringToReverse);
echo "Chuỗi đảo ngược của '" . $stringToReverse . "' là: " . $reversedString;


// Câu 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements($array) {
    $count = count($array);
    return $count;
}
echo "<br><br><b> Câu 16: </b>";
// Mảng cần tính số lượng phần tử
$arrayToCount = array(1, 3, 5, 7, 9); 
// Gọi hàm và in kết quả
$elementCount = countElements($arrayToCount);
echo "Số lượng phần tử trong mảng là: " . $elementCount;


// Câu 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
/* Một palindrome là một từ, số, cụm từ, hay chuỗi các biểu tượng mà 
khi đọc từ trái sang phải cũng giống như đọc từ phải sang trái. 
Ví dụ: 11, 22, 121, 12321, paap */
function isPalindrome($str) {
    $tempStr = $str; // Biến $temStr dùng khi thay đổi giá trị $str
    $tempStr = strtolower(str_replace(' ', '', $tempStr)); // str_replace: loại bỏ khoảng trắng và strtolower: chuyển chữ hoa về chữ thường
    $reverseStr = strrev($tempStr); // Đảo ngược chuỗi
    // Kiểm tra
    if ($tempStr == $reverseStr) {
        echo "Chuỗi '". $str . "' là chuỗi Palindrome."; 
    } else {
        echo "Chuỗi '". $str . "' không phải là chuỗi Palindrome."; 
    }
}
echo "<br><br><b> Câu 17: </b>";
// Chuỗi cần kiểm tra
$stringToCheck = "A man a plan a canal Panama"; 
// Kiểm tra và in kết quả
isPalindrome($stringToCheck);


// Câu 18: Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
function countOccurrences($array, $searchElement) {
    $count = 0;
    foreach ($array as $element) {
        if ($element == $searchElement) {
            $count++;
        }
    }
    return $count;
}
echo "<br><br><b> Câu 18: </b>";
// Mảng cần kiểm tra và phần tử cần đếm số lần xuất hiện
$myArray = array(1, 2, 3, 4, 2, 5, 2, 6); 
$elementToFind = 2;
// Gọi hàm và in kết quả
$occurrenceCount = countOccurrences($myArray, $elementToFind);
echo "Số lần xuất hiện của phần tử " . $elementToFind . " trong mảng là: " . $occurrenceCount;


// Câu 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortedInDescendingOrder($array) {
    rsort($array);
    echo "Mảng đã sắp xếp theo thứ tự giảm dần là: " . implode(', ', $array);
}
echo "<br><br><b> Câu 19: </b>";
$myArray = array(4, 2, 8, 6, 10);
$sortedArray = sortedInDescendingOrder($myArray);


// Câu 20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
function addElementAtBeginning($array, $element) { // Thêm phần tử vào đầu mảng
    array_unshift($array, $element); 
    return $array;
}

function addElementAtEnd($array, $element) { // Thêm phần tử vào cuối mảng
    array_push($array, $element); 
    return $array;
}

echo "<br><br><b> Câu 20: </b>";
// Mảng ban đầu
$myArray = array(1, 2, 3, 4, 5);
$elementToAdd = 6; // Phần tử cần thêm 
// Thêm phần tử vào đầu mảng và in mảng mới
$newBArray = addElementAtBeginning($myArray, $elementToAdd);
echo "<br>- Mảng sau khi thêm phần tử " . $elementToAdd . " vào đầu mảng là: " . implode(', ', $newBArray);
// Thêm phần tử vào cuối mảng và in mảng mới
$newEArray = addElementAtEnd($myArray, $elementToAdd);
echo "<br>- Mảng sau khi thêm phần tử " . $elementToAdd . " vào cuối mảng là: " . implode(', ', $newEArray);


// Câu 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
function findSecondLargest($array) {
    $largest = $array[0];
    $secondLargest = $array[0];

    foreach ($array as $value) {
        if ($value > $largest) {
            $secondLargest = $largest;
            $largest = $value;
        } elseif ($value > $secondLargest && $value != $largest) {
            $secondLargest = $value;
        }
    }
    return $secondLargest;
}
echo "<br><br><b> Câu 21: </b>";
$myArray = array(5, 2, 8, 10, 3, 6);
$secondLargestNumber = findSecondLargest($myArray);
echo "Số lớn thứ hai trong mảng là: " . $secondLargestNumber;


// Câu 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($a, $b) { // Hàm tìm ước chung lớn nhất
    while ($b != 0) {
        $t = $a % $b;
        $a = $b;
        $b = $t;
    }
    return $a;
}

function findLCM($a, $b) { // Hàm tìm bội chung nhỏ nhất
    return ($a * $b) / findGCD($a, $b);
}
echo "<br><br><b> Câu 22: </b>";
// Hai số nguyên dương cần kiểm tra
$number1 = 12;
$number2 = 18;

// Tìm ước số chung lớn nhất và bội số chung nhỏ nhất
$gcd = findGCD($number1, $number2);
$lcm = findLCM($number1, $number2);
echo "<br>- Ước số chung lớn nhất của " . $number1 . " và " . $number2 . " là: " . $gcd . "<br>";
echo "- Bội số chung nhỏ nhất của " . $number1 . " và " . $number2 . " là: " . $lcm;


// Câu 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
function isPerfectNumber($n) {
    $sum = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $n;
}
echo "<br><br><b> Câu 23: </b>";
// Số cần kiểm tra
$numberToCheck = 28; 
//Kiểm tra và in kết quả
if (isPerfectNumber($numberToCheck)) {
    echo $numberToCheck . " là số hoàn hảo.";
} else {
    echo $numberToCheck . " không phải là số hoàn hảo.";
}


// Câu 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOdd($array) {
    $largestOdd = null; 
    foreach ($array as $number) {
        if ($number % 2 != 0) { 
            if ($largestOdd === null || $number > $largestOdd) { // Nếu chưa có số lẻ nào được lưu hoặc số hiện tại lớn hơn số lẻ lớn nhất đã lưu
                $largestOdd = $number; 
            }
        }
    }
    return $largestOdd; 
}
echo "<br><br><b> Câu 24: </b>";
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$largestOddNumber = findLargestOdd($array);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;


// Câu 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrimeNumber($n){
    if (is_numeric($n) && is_int($n) && $n >= 2) {
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }  
        }
        return true; 
    } else {
        return false;
    }
}
echo "<br><br><b> Câu 25: </b>";
$numberToCheck = 55; 
// Kiểm tra và in kết quả
if (isPrimeNumber($numberToCheck)) {
    echo $numberToCheck . " là số nguyên tố.";
} else {
    echo $numberToCheck . " không phải là số nguyên tố.";
}


// Cau 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositive($array) {
    $largestPositive = null; 
    foreach ($array as $number) {
        if ($number > 0) { 
            if ($largestPositive === null || $number > $largestPositive) { // Nếu chưa có số dương nào được lưu hoặc số hiện tại lớn hơn số dương lớn nhất đã lưu
                $largestPositive = $number; 
            }
        }
    }
    return $largestPositive; 
}
echo "<br><br><b> Câu 26: </b>";
$array = array(-3, 5, -8, 10, 0, 7);
$largestPositive = findLargestPositive($array);
echo "Số dương lớn nhất trong mảng là: " . $largestPositive;


// Câu 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($array) {
    $largestNegative = null;
    foreach ($array as $number) {
        if ($number < 0) { 
            if ($largestNegative === null || $number > $largestNegative) { 
                $largestNegative = $number; 
            }
        }
    }
    return $largestNegative; 
}
echo "<br><br><b> Câu 27: </b>";
$array = array(-3, 5, -8, 10, -7);
$largestNegative = findLargestNegative($array);
echo "Số âm lớn nhất trong mảng là: " . $largestNegative;


// Câu 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOfOddNumbers($n) {
    $sum = 0; 
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) { 
            $sum += $i; 
        }
    }
    return $sum; 
}
echo "<br><br><b> Câu 28: </b>";
$n = 10; 
$sum = sumOfOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;


// Câu 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
function findPerfectSquareNumbers($start, $end) {
    $perfectSquares = array();
    for ($i = $start; $i <= $end; $i++) {
        if (sqrt($i) == (int)sqrt($i)) {
            $perfectSquares[] = $i; // Thêm số chính phương vào mảng
        }
    }
    return $perfectSquares;
}
echo "<br><br><b> Câu 29: </b>";
$start = 1; // Giới hạn dưới của khoảng
$end = 100; // Giới hạn trên của khoảng
$perfectSquares = findPerfectSquareNumbers($start, $end);
echo "Các số chính phương từ " . $start . " đến " . $end . " là: " . implode(', ', $perfectSquares);


// Câu 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
function isSubstring($string, $substring) {
    if (strpos($string, $substring) !== false) {
        return true; // Nếu chuỗi con được tìm thấy trong chuỗi ban đầu
    } else {
        return false; // Nếu chuỗi con không được tìm thấy trong chuỗi ban đầu
    }
}
echo "<br><br><b> Câu 30: </b>";
$string = "Vũ Ngân Hà";
$substring = "Hà";
if (isSubstring($string, $substring)) {
    echo "\"" . $substring . "\" là chuỗi con của \"" . $string . "\"";
}
?>