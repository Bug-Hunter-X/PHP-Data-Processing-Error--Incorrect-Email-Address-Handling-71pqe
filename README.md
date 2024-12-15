# PHP Data Processing Bug: Incorrect Email Handling
This repository demonstrates a common error in PHP data processing involving the incorrect handling of email addresses that contain '+' symbols in the local part.  The provided `bug.php` file showcases the flawed logic, which can lead to data truncation and potentially security issues.  The `bugSolution.php` file offers a corrected version of the code.

The bug stems from an overly simplistic approach to extracting the username part of the email address.  The solution addresses this by using a more robust method for parsing email addresses.

## How to reproduce the bug
1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the incorrect processing of the email address `user+alias@example.com`.

## How to fix the bug
1. Review the corrected code in `bugSolution.php`.
2. Note the improved email address handling using a more sophisticated approach to avoid truncation.