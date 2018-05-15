using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

class Solution {

    /*
     * Complete the countApplesAndOranges function below.
     */
    static void countApplesAndOranges(int s, int t, int a, int b, int[] apples, int[] oranges) {
        /*
         * Write your code here.
         */
        int apples_landed = 0;
        foreach (int apple in apples) {
            var position = a + apple;
            if (position >= s && position <= t) {
                apples_landed++;
            }
        }
        
        int oranges_landed = 0;
        foreach (int orange in oranges) {
            var position = b + orange;
            if (position >= s && position <= t) {
                oranges_landed++;
            }
        }
        
        Console.WriteLine(apples_landed);
        Console.WriteLine(oranges_landed);
    }

    static void Main(string[] args) {
        string[] st = Console.ReadLine().Split(' ');

        int s = Convert.ToInt32(st[0]);

        int t = Convert.ToInt32(st[1]);

        string[] ab = Console.ReadLine().Split(' ');

        int a = Convert.ToInt32(ab[0]);

        int b = Convert.ToInt32(ab[1]);

        string[] mn = Console.ReadLine().Split(' ');

        int m = Convert.ToInt32(mn[0]);

        int n = Convert.ToInt32(mn[1]);

        int[] apple = Array.ConvertAll(Console.ReadLine().Split(' '), appleTemp => Convert.ToInt32(appleTemp))
        ;

        int[] orange = Array.ConvertAll(Console.ReadLine().Split(' '), orangeTemp => Convert.ToInt32(orangeTemp))
        ;
        countApplesAndOranges(s, t, a, b, apple, orange);
    }
}
