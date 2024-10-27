#include <iostream>
using namespace std;

int main() {
  int exit = 0;
  string arrUsers[5][6] = {{"0", "Juan", "A", "Dela Cruz", "jdelacruz", "DHlHaQuA"}, {"1", "Jun", "A", "Lacambra", "j2023me", "gu9YKLep"}, {"2", "Peter", "S", "Santos", "psantos", "DLGM99SG"}, {"3", "Rose", "D", "Smith", "smith.rose", "JdZwn6Xi"}, {"4", "Rick", "R", "Stevens", "rstevens", "rF9I0c3A"}};

  string accDetails[6] = {"\nUser ID: ", "\nFirst Name: ", "\nMiddle Initial: ", "\nLast Name: ", "\nUsername: ", "\nPassword: ", };

  string uname;
  string password;
  string newpass;
  int choice;
  int quitChoice;
  int uid;
  
  while (exit == 0)
    {
      int userQuit = 1;
      cout << "\n\t ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
      cout << "\t |               MAIN MENU              |\n";
      cout << "\t |                                      |\n";
      cout << "\t | Choose Account Type -                |\n";
      cout << "\t | (1) User | (2) Admin | (3) Quit      |\n";
      cout << "\t |                                      |\n";
      cout << "\t ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
      cout << "\t ONLY ENTER NUMBERS FOR MENU OPTIONS.\n";
      cout << "Enter input here: ";
      cin >> choice;
    
      switch (choice)
      {
        case 2:
        {
          cout << "\nPlease enter Username and Password.\n";
          cout << "Username: ";
          cin >> uname;
          cout << "Password: ";
          cin >> password;
    
          if (uname == "admin01" && password == "admin123")
          {
            while (userQuit == 1)
            {
              cout << "\n\t ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
              cout << "\t |            ADMIN DASHBOARD           |\n";
              cout << "\t |                                      |\n";
              cout << "\t | Choose Option -                      |\n";
              cout << "\t | (1) View User                        |\n";
              cout << "\t | (2) Reset Password                   |\n";
              cout << "\t | (any other #) Logout                 |\n";
              cout << "\t |                                      |\n";
              cout << "\t ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
              cout << "Enter input here: ";
              cin >> choice;
        
              if (choice == 1)
              {
                cout << "\nPlease enter User ID (0-4): ";
                cin >> choice;
                  
                for (int row = 0; row != 6; row++)
                  {
                   cout << accDetails[row] << arrUsers[choice][row];
                  }
                cout << "\nDo you want to return to the admin menu? (1) Yes | (any) No: ";
                cin >> quitChoice;
                if (quitChoice == 1)
                {
                  userQuit = 1;
                }
                else
                {
                  userQuit = 0;
                  break;
                }
              }
              else if (choice == 2)
              {  
                cout << "\nPlease enter User ID (0-4): ";
                cin >> choice;
      
                cout << "\nUsername: " << arrUsers[choice][4];
                cout << "\nCurrent Password: " << arrUsers[choice][5];
      
                cout << "\nNew Password: ";
                cin >> newpass;
      
                arrUsers[choice][5] = newpass;
                cout << "\nPassword changed to " << arrUsers[choice][5];
                
                cout << "\nDo you want to return to the admin menu? (1) Yes | (any other #) No: ";
                cin >> quitChoice;
                if (quitChoice == 1)
                {
                  userQuit = 1;
                }
                else
                {
                  userQuit = 0;
                  break;
                }
              }
              else
              {
                userQuit = 0; 
                break;
              } 
            }
          }
            else
            {
              cout << "\nIncorrect username or password.\n";
              exit = 0;
              break;
            }
          break;
        }
           
        
        
        case 1:
        {
          cout << "\nPlease enter User ID (0-4), Username and Password.\n";
          cout << "User ID: ";
          cin >> uid;
          cout << "Username: ";
          cin >> uname;
          cout << "Password: ";
          cin >> password;
  
          if (uname == arrUsers[uid][4] && password == arrUsers[uid][5])
          {
            while (userQuit == 1)
              {
              cout << "\n\t ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
              cout << "\t |            User Dashboard            |\n";
              cout << "\t |                                      |\n";
              cout << "\t | Choose Option -                      |\n";
              cout << "\t | (1) View My Data                     |\n";
              cout << "\t | (any other #) Logout                 |\n";
              cout << "\t |                                      |\n";
              cout << "\t ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
              cout << "Enter input here: ";
              cin >> choice;
    
              if (choice == 1)
              {
                for (int row = 0; row != 6; row++)
                {
                  cout << accDetails[row] << arrUsers[uid][row];
                }
                cout << "\nDo you want to return to the user menu? (1) Yes | (any other #) No: ";
                cin >> quitChoice;
                if (quitChoice == 1)
                {
                  userQuit = 1;
                }
                else
                {
                  userQuit = 0;
                  break;
                }
              }  
              else
              {
                quitChoice = 0;
                break;
              }
            }
          }
          else 
          {
            cout << "\nIncorrect UID, Username or Password.";
            break;
          }
    
            break;
        }
        case 3:
          {
            cout << "\nLogged out. Please come again.";
            return 0;
          }
        default:
          {
            cout << "Please enter a valid input.";
            break;
          }
        
      }
  }
}
