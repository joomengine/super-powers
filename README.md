```
███████╗██╗   ██╗██████╗ ███████╗██████╗
██╔════╝██║   ██║██╔══██╗██╔════╝██╔══██╗
███████╗██║   ██║██████╔╝█████╗  ██████╔╝
╚════██║██║   ██║██╔═══╝ ██╔══╝  ██╔══██╗
███████║╚██████╔╝██║     ███████╗██║  ██║
╚══════╝ ╚═════╝ ╚═╝     ╚══════╝╚═╝  ╚═╝
██████╗  ██████╗ ██╗    ██╗███████╗██████╗ ███████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗██╔════╝
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝███████╗
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗╚════██║
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║███████║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝╚══════╝
```

### What is JCB Super Powers?
The Joomla Component Builder (JCB) Super Power features are designed to enhance JCB's functionality and streamline the development process. These Super Powers enable developers to efficiently manage and share their custom powers across multiple JCB instances through repositories hosted on [https://git.vdm.dev/[username]/[repository-name]](https://git.vdm.dev). JCB Super Powers are managed using a combination of layers, events, tasks, methods, switches, and algorithms, which work together to provide powerful customization and extensibility options. More details on JCB Super Powers can be found in the [Super Powers Documentation](https://git.vdm.dev/joomla/super-powers/wiki).

In summary, JCB Super Powers offer a flexible and efficient way to manage and share functionalities between JCB instances. By utilizing a sophisticated system of layers, events, tasks, methods, switches, and algorithms, developers can seamlessly integrate JCB core powers and their custom powers. For more information on how to work with JCB Super Powers, refer to the [Super Powers User Guide](https://git.vdm.dev/joomla/super-powers/wiki).

### What can I find here?
This repository contains an index (see below) of all the approved powers within the JCB GUI. During the compilation of a component, these powers are automatically added to the repository, ensuring a well-organized and accessible collection of functionalities.

# Index of powers

- **Namespace**: [VDM\Joomla\Abstraction](#vdm-joomla-abstraction)

  - **abstract class BaseConfig** | [Details](src/ffbd4e1f-a342-4080-ab7d-1de3741bf319) | [Code](src/ffbd4e1f-a342-4080-ab7d-1de3741bf319/code.php) | [Settings](src/ffbd4e1f-a342-4080-ab7d-1de3741bf319/settings.json) | Super__ffbd4e1f_a342_4080_ab7d_1de3741bf319__Power
  - **abstract class BaseTable** | [Details](src/e0f6ddbe-2a35-4537-942c-faff2ebd04f6) | [Code](src/e0f6ddbe-2a35-4537-942c-faff2ebd04f6/code.php) | [Settings](src/e0f6ddbe-2a35-4537-942c-faff2ebd04f6/settings.json) | Super__e0f6ddbe_2a35_4537_942c_faff2ebd04f6__Power
  - **abstract class Database** | [Details](src/6cbef8f8-4813-48e3-b05a-65e1aea95171) | [Code](src/6cbef8f8-4813-48e3-b05a-65e1aea95171/code.php) | [Settings](src/6cbef8f8-4813-48e3-b05a-65e1aea95171/settings.json) | Super__6cbef8f8_4813_48e3_b05a_65e1aea95171__Power
  - **abstract class Model** | [Details](src/584747d1-3a86-453d-b7a3-a2219de8d777) | [Code](src/584747d1-3a86-453d-b7a3-a2219de8d777/code.php) | [Settings](src/584747d1-3a86-453d-b7a3-a2219de8d777/settings.json) | Super__584747d1_3a86_453d_b7a3_a2219de8d777__Power
- **Namespace**: [VDM\Joomla\Database](#vdm-joomla-database)

  - **final class Insert** | [Details](src/524eb8f6-38d4-47dc-92ad-98b94e099ac0) | [Code](src/524eb8f6-38d4-47dc-92ad-98b94e099ac0/code.php) | [Settings](src/524eb8f6-38d4-47dc-92ad-98b94e099ac0/settings.json) | Super__524eb8f6_38d4_47dc_92ad_98b94e099ac0__Power
  - **final class Load** | [Details](src/06f8eada-d59b-441c-b287-0aea1793da5a) | [Code](src/06f8eada-d59b-441c-b287-0aea1793da5a/code.php) | [Settings](src/06f8eada-d59b-441c-b287-0aea1793da5a/settings.json) | Super__06f8eada_d59b_441c_b287_0aea1793da5a__Power
  - **final class Update** | [Details](src/cce56585-58b0-4f72-a92c-e2635ea52d83) | [Code](src/cce56585-58b0-4f72-a92c-e2635ea52d83/code.php) | [Settings](src/cce56585-58b0-4f72-a92c-e2635ea52d83/settings.json) | Super__cce56585_58b0_4f72_a92c_e2635ea52d83__Power
- **Namespace**: [VDM\Joomla\Interfaces](#vdm-joomla-interfaces)

  - **interface FactoryInterface** | [Details](src/caf33c5d-858c-4f9a-894f-ab302ec5445a) | [Code](src/caf33c5d-858c-4f9a-894f-ab302ec5445a/code.php) | [Settings](src/caf33c5d-858c-4f9a-894f-ab302ec5445a/settings.json) | Super__caf33c5d_858c_4f9a_894f_ab302ec5445a__Power
  - **interface InsertInterface** | [Details](src/ad12ca1c-d3ce-4e7f-88c5-c6c92bdedc48) | [Code](src/ad12ca1c-d3ce-4e7f-88c5-c6c92bdedc48/code.php) | [Settings](src/ad12ca1c-d3ce-4e7f-88c5-c6c92bdedc48/settings.json) | Super__ad12ca1c_d3ce_4e7f_88c5_c6c92bdedc48__Power
  - **interface LoadInterface** | [Details](src/2ad31f74-f579-499d-b98b-c4f54fd615dd) | [Code](src/2ad31f74-f579-499d-b98b-c4f54fd615dd/code.php) | [Settings](src/2ad31f74-f579-499d-b98b-c4f54fd615dd/settings.json) | Super__2ad31f74_f579_499d_b98b_c4f54fd615dd__Power
  - **interface ModelInterface** | [Details](src/8aef58c1-3f70-4bd4-b9e4-3f29fcd41cff) | [Code](src/8aef58c1-3f70-4bd4-b9e4-3f29fcd41cff/code.php) | [Settings](src/8aef58c1-3f70-4bd4-b9e4-3f29fcd41cff/settings.json) | Super__8aef58c1_3f70_4bd4_b9e4_3f29fcd41cff__Power
  - **interface Tableinterface** | [Details](src/2da6d6c4-eb29-4d69-8bc2-36d96e916adf) | [Code](src/2da6d6c4-eb29-4d69-8bc2-36d96e916adf/code.php) | [Settings](src/2da6d6c4-eb29-4d69-8bc2-36d96e916adf/settings.json) | Super__2da6d6c4_eb29_4d69_8bc2_36d96e916adf__Power
  - **interface UpdateInterface** | [Details](src/7179fde6-1e51-4b51-8545-7ca18f74a0f4) | [Code](src/7179fde6-1e51-4b51-8545-7ca18f74a0f4/code.php) | [Settings](src/7179fde6-1e51-4b51-8545-7ca18f74a0f4/settings.json) | Super__7179fde6_1e51_4b51_8545_7ca18f74a0f4__Power
- **Namespace**: [VDM\Joomla\Utilities](#vdm-joomla-utilities)

  - **abstract class ArrayHelper** | [Details](src/0a59c65c-9daf-4bc9-baf4-e063ff9e6a8a) | [Code](src/0a59c65c-9daf-4bc9-baf4-e063ff9e6a8a/code.php) | [Settings](src/0a59c65c-9daf-4bc9-baf4-e063ff9e6a8a/settings.json) | Super__0a59c65c_9daf_4bc9_baf4_e063ff9e6a8a__Power
  - **abstract class GetHelper** | [Details](src/db87c339-5bb6-4291-a7ef-2c48ea1b06bc) | [Code](src/db87c339-5bb6-4291-a7ef-2c48ea1b06bc/code.php) | [Settings](src/db87c339-5bb6-4291-a7ef-2c48ea1b06bc/settings.json) | Super__db87c339_5bb6_4291_a7ef_2c48ea1b06bc__Power
  - **abstract class GuidHelper** | [Details](src/9c513baf-b279-43fd-ae29-a585c8cbc4f0) | [Code](src/9c513baf-b279-43fd-ae29-a585c8cbc4f0/code.php) | [Settings](src/9c513baf-b279-43fd-ae29-a585c8cbc4f0/settings.json) | Super__9c513baf_b279_43fd_ae29_a585c8cbc4f0__Power
  - **abstract class JsonHelper** | [Details](src/4b225c51-d293-48e4-b3f6-5136cf5c3f18) | [Code](src/4b225c51-d293-48e4-b3f6-5136cf5c3f18/code.php) | [Settings](src/4b225c51-d293-48e4-b3f6-5136cf5c3f18/settings.json) | Super__4b225c51_d293_48e4_b3f6_5136cf5c3f18__Power
  - **abstract class ObjectHelper** | [Details](src/91004529-94a9-4590-b842-e7c6b624ecf5) | [Code](src/91004529-94a9-4590-b842-e7c6b624ecf5/code.php) | [Settings](src/91004529-94a9-4590-b842-e7c6b624ecf5/settings.json) | Super__91004529_94a9_4590_b842_e7c6b624ecf5__Power
  - **abstract class StringHelper** | [Details](src/1f28cb53-60d9-4db1-b517-3c7dc6b429ef) | [Code](src/1f28cb53-60d9-4db1-b517-3c7dc6b429ef/code.php) | [Settings](src/1f28cb53-60d9-4db1-b517-3c7dc6b429ef/settings.json) | Super__1f28cb53_60d9_4db1_b517_3c7dc6b429ef__Power
- **Namespace**: [VDM\Joomla\Utilities\Component](#vdm-joomla-utilities-component)

  - **abstract class Helper** | [Details](src/640b5352-fb09-425f-a26e-cd44eda03f15) | [Code](src/640b5352-fb09-425f-a26e-cd44eda03f15/code.php) | [Settings](src/640b5352-fb09-425f-a26e-cd44eda03f15/settings.json) | Super__640b5352_fb09_425f_a26e_cd44eda03f15__Power
- **Namespace**: [VDM\Joomla\Utilities\String](#vdm-joomla-utilities-string)

  - **abstract class ClassfunctionHelper** | [Details](src/30c5b4c2-f75f-4d15-869a-f8bfedd87358) | [Code](src/30c5b4c2-f75f-4d15-869a-f8bfedd87358/code.php) | [Settings](src/30c5b4c2-f75f-4d15-869a-f8bfedd87358/settings.json) | Super__30c5b4c2_f75f_4d15_869a_f8bfedd87358__Power

---
```
     ██╗ ██████╗  ██████╗ ███╗   ███╗██╗      █████╗
     ██║██╔═══██╗██╔═══██╗████╗ ████║██║     ██╔══██╗
     ██║██║   ██║██║   ██║██╔████╔██║██║     ███████║
██   ██║██║   ██║██║   ██║██║╚██╔╝██║██║     ██╔══██║
╚█████╔╝╚██████╔╝╚██████╔╝██║ ╚═╝ ██║███████╗██║  ██║
 ╚════╝  ╚═════╝  ╚═════╝ ╚═╝     ╚═╝╚══════╝╚═╝  ╚═╝
 ██████╗ ██████╗ ███╗   ███╗██████╗  ██████╗ ███╗   ██╗███████╗███╗   ██╗████████╗
██╔════╝██╔═══██╗████╗ ████║██╔══██╗██╔═══██╗████╗  ██║██╔════╝████╗  ██║╚══██╔══╝
██║     ██║   ██║██╔████╔██║██████╔╝██║   ██║██╔██╗ ██║█████╗  ██╔██╗ ██║   ██║
██║     ██║   ██║██║╚██╔╝██║██╔═══╝ ██║   ██║██║╚██╗██║██╔══╝  ██║╚██╗██║   ██║
╚██████╗╚██████╔╝██║ ╚═╝ ██║██║     ╚██████╔╝██║ ╚████║███████╗██║ ╚████║   ██║
 ╚═════╝ ╚═════╝ ╚═╝     ╚═╝╚═╝      ╚═════╝ ╚═╝  ╚═══╝╚══════╝╚═╝  ╚═══╝   ╚═╝
██████╗ ██╗   ██╗██╗██╗     ██████╗ ███████╗██████╗
██╔══██╗██║   ██║██║██║     ██╔══██╗██╔════╝██╔══██╗
██████╔╝██║   ██║██║██║     ██║  ██║█████╗  ██████╔╝
██╔══██╗██║   ██║██║██║     ██║  ██║██╔══╝  ██╔══██╗
██████╔╝╚██████╔╝██║███████╗██████╔╝███████╗██║  ██║
╚═════╝  ╚═════╝ ╚═╝╚══════╝╚═════╝ ╚══════╝╚═╝  ╚═╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

