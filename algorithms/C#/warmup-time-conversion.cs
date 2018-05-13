using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;

class Solution {

    /*
     * Complete the timeConversion function below.
     */
    static string timeConversion(string s) {
        /*
         * Write your code here.
         */

        if (s.StartsWith("12")) {
            var hour = s.EndsWith("PM") ? "12" : "00";
            return hour + s.Substring(2, s.Length - 4);
        } else if (s.EndsWith("PM")) {
            var hour = Convert.ToString(Convert.ToInt32(s.Substring(0, 2)) + 12);
            return hour + s.Substring(2, s.Length - 4);
        }
        
        return s.Substring(0, s.Length - 2);
    }

    static void Main(string[] args) {
        TextWriter tw = new StreamWriter(@System.Environment.GetEnvironmentVariable("OUTPUT_PATH"), true);

        string s = Console.ReadLine();

        string result = timeConversion(s);

        tw.WriteLine(result);

        tw.Flush();
        tw.Close();
    }
}
