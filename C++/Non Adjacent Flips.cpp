#include <iostream>
using namespace std;

int main() {

    int t; cin >> t;
    
    while (t--) {
    
        int n;
        string s;
        cin >> n; 
        cin >> s;
        int x = 0, y = 0;
        
        for (int i = 0; i < n; i++) {
        
            if (s[i] == '1') {
            
                y++;
                
                if (s[i] == s[i + 1]) {
                
                    x++;
                }
            }

        }
        
        if (y == 0)cout << 0 << endl;
        
        else {
        
            if (x == 0)cout << 1 << endl;
            else { cout << 2 << endl; }

        }
    }
    return 0;
}
