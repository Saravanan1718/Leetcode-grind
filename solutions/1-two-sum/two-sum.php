class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $hashMap = [];
        for($i=0;$i<count($nums);$i++){
            $compliment = $target - $nums[$i];
            if(isset($hashMap[$compliment])){
                return [$hashMap[$compliment], $i];
            }
            $hashMap[$nums[$i]] = $i;
        }   
    }
}