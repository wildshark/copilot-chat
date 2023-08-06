# Copilot Chat - Web Application

Copilot Chat is a simple web application that uses the OpenAI API to create a chatbot that responds to user inputs. This project demonstrates how to integrate HTML, PHP, and JavaScript to build a basic chatbot interface that interacts with the OpenAI GPT-3 API.

## Getting Started

To run this application, you'll need to follow these steps:

1. Obtain an API key from OpenAI: Visit the [OpenAI website](https://beta.openai.com/signup/) to sign up and obtain your API key.

2. Clone the repository: Clone this repository to your local environment using the following command:
   ```
   git clone [<repository-url>](https://github.com/wildshark/copilot-chat.git)
   ```

3. Set up the server: You'll need PHP server hosting capabilities to run this application. You can use tools like XAMPP, WAMP, or any other PHP server of your choice.

4. Configure the API key: Open the `api.php` file and replace `'YOUR_API_KEY'` with the API key you obtained from OpenAI.

5. Start the server: Run your PHP server, making sure it serves the files in the project directory.

6. Access the application: Open your web browser and navigate to the application's URL (usually `http://localhost` or `http://localhost:<port>`).

## How to Use

1. The web application displays a simple chat interface.

2. Enter your message in the input field labeled "User Input."

3. Click the "Send" button to send your message to the chatbot.

4. The chatbot will process your input using the OpenAI GPT-3 API and respond with its answer, which will be displayed in the chatbox.

5. You can continue the conversation by entering new messages in the input field and clicking "Send" to see the chatbot's replies.

## Project Structure

The project consists of the following files:

1. `index.html`: The front-end of the web application that contains the chat interface and user input elements.

2. `api.php`: The PHP file that interacts with the OpenAI API and handles the communication between the front-end and the OpenAI GPT-3 API.

3. `script.js`: The JavaScript file that manages user interactions, sends API requests, and updates the chatbox with responses.

## Dependencies

- OpenAI GPT-3 API: The web application relies on the OpenAI GPT-3 API for natural language processing and generating chatbot responses. Make sure you have a valid API key to use this service.

## Contributing

Contributions are welcome! If you find any issues or have ideas to enhance this project, feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- The project was inspired by the capabilities of the OpenAI GPT-3 API and aims to demonstrate a basic chatbot implementation using web technologies.

## Disclaimer

Please note that this project is a simple example and not a fully-fledged application. It may not have all the error handling, security, or performance optimizations required for production use. Use it responsibly and adhere to the OpenAI API usage policies.
