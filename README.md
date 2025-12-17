# JCB! Super Powers

### What Are JCB Super Powers?
In simple terms, **JCB Super Powers are PHP classes** — but managed entirely from the Joomla Component Builder (JCB) interface.

You can use JCB to create your own:
- **Classes**
- **Interfaces**
- **Abstract classes**
- **Traits**
- **Final classes**

These are full-featured PHP code units that you define visually in the JCB GUI. JCB then takes care of:
- Proper **namespacing**
- Correct **file placement**
- Seamless **project integration**

Every Super Power is treated as a reusable unit of logic. It can be automatically injected into any part of your JCB-powered component, or used in other components or codebases via a **SPK** (Super Power Key).

Even better — you can use **dynamic placeholders** like [[[`NamespacePrefix`]]] or [[[`ComponentNamespace`]]] in your Super Power code Namespace. These automatically adapt when reused in different projects, making your logic portable and future-proof.

> In short: **Super Powers turn JCB into a PHP code factory** — giving you the power of advanced PHP with none of the manual file management.

To learn how to create, manage, and use Super Powers, see the  
[Super Powers Documentation →](https://git.vdm.dev/joomla/super-powers/wiki)

### What Can I Find Here?
This repository acts as a **central registry of approved Super Powers** specific to this JCB instance.  
Only the Super Powers that have been explicitly assigned to this repository are listed here.

In JCB, you can organize your Super Powers across multiple repositories.  
For example, we have separate repositories for:

- [GITEA](https://git.vdm.dev/joomla/gitea)-related classes
- [OpenAI](https://git.vdm.dev/joomla/openai) integrations
- Core [Super Power](https://git.vdm.dev/joomla/super-powers) collection
- and many more...

Each repository maintains its own index, and only the powers assigned to that specific repository will appear in its list.
#### How to Use These Super Powers
If you want to use any of the classes listed here in your own component logic, simply reference their **SPK** (Super Power Key):

```
Super---[unique-guid]---Power
```

> Replace each `---` with `___` when using the key inside your code.

JCB will automatically resolve this SPK during compilation, placing the associated class in the correct location with the correct namespace based on your component context.  
This makes your logic both **reusable** and **component-aware**, without hardcoding anything.

---
# Index of powers

- **Namespace**: [VDM\Joomla\Abstraction](#vdm-joomla-abstraction)

  - **abstract class ActiveRegistry** | [Details](src/43134867-5cb8-4280-9be8-309fd2fd135f) | [Raw](src/43134867-5cb8-4280-9be8-309fd2fd135f/code.power) | [Settings](src/43134867-5cb8-4280-9be8-309fd2fd135f/settings.json) | SPK: `Super---43134867_5cb8_4280_9be8_309fd2fd135f---Power`
  - **abstract class BaseTable** | [Details](src/e0f6ddbe-2a35-4537-942c-faff2ebd04f6) | [Raw](src/e0f6ddbe-2a35-4537-942c-faff2ebd04f6/code.power) | [Settings](src/e0f6ddbe-2a35-4537-942c-faff2ebd04f6/settings.json) | SPK: `Super---e0f6ddbe_2a35_4537_942c_faff2ebd04f6---Power`
  - **abstract class Database** | [Details](src/6cbef8f8-4813-48e3-b05a-65e1aea95171) | [Raw](src/6cbef8f8-4813-48e3-b05a-65e1aea95171/code.power) | [Settings](src/6cbef8f8-4813-48e3-b05a-65e1aea95171/settings.json) | SPK: `Super---6cbef8f8_4813_48e3_b05a_65e1aea95171---Power`
  - **abstract class Factory** | [Details](src/2e5bf608-de5c-4b00-a20d-47c26aa350d9) | [Raw](src/2e5bf608-de5c-4b00-a20d-47c26aa350d9/code.power) | [Settings](src/2e5bf608-de5c-4b00-a20d-47c26aa350d9/settings.json) | SPK: `Super---2e5bf608_de5c_4b00_a20d_47c26aa350d9---Power`
  - **abstract class FunctionRegistry** | [Details](src/ffbd4e1f-a342-4080-ab7d-1de3741bf319) | [Raw](src/ffbd4e1f-a342-4080-ab7d-1de3741bf319/code.power) | [Settings](src/ffbd4e1f-a342-4080-ab7d-1de3741bf319/settings.json) | SPK: `Super---ffbd4e1f_a342_4080_ab7d_1de3741bf319---Power`
  - **abstract class Grep** | [Details](src/1401a167-0ce4-4f4a-afee-2d8b02ed339b) | [Raw](src/1401a167-0ce4-4f4a-afee-2d8b02ed339b/code.power) | [Settings](src/1401a167-0ce4-4f4a-afee-2d8b02ed339b/settings.json) | SPK: `Super---1401a167_0ce4_4f4a_afee_2d8b02ed339b---Power`
  - **abstract class Model** | [Details](src/584747d1-3a86-453d-b7a3-a2219de8d777) | [Raw](src/584747d1-3a86-453d-b7a3-a2219de8d777/code.power) | [Settings](src/584747d1-3a86-453d-b7a3-a2219de8d777/settings.json) | SPK: `Super---584747d1_3a86_453d_b7a3_a2219de8d777---Power`
  - **abstract class PHPConfigurationChecker** | [Details](src/900456a2-feb5-48b9-9f05-c5a032a32c59) | [Raw](src/900456a2-feb5-48b9-9f05-c5a032a32c59/code.power) | [Settings](src/900456a2-feb5-48b9-9f05-c5a032a32c59/settings.json) | SPK: `Super---900456a2_feb5_48b9_9f05_c5a032a32c59---Power`
  - **abstract class Registry** | [Details](src/7e822c03-1b20-41d1-9427-f5b8d5836af7) | [Raw](src/7e822c03-1b20-41d1-9427-f5b8d5836af7/code.power) | [Settings](src/7e822c03-1b20-41d1-9427-f5b8d5836af7/settings.json) | SPK: `Super---7e822c03_1b20_41d1_9427_f5b8d5836af7---Power`
  - **abstract class Schema** | [Details](src/f3c04c28-bce4-422e-be93-7d163e4e342b) | [Raw](src/f3c04c28-bce4-422e-be93-7d163e4e342b/code.power) | [Settings](src/f3c04c28-bce4-422e-be93-7d163e4e342b/settings.json) | SPK: `Super---f3c04c28_bce4_422e_be93_7d163e4e342b---Power`
  - **abstract class SchemaChecker** | [Details](src/5f0205fa-5c43-424a-af7d-abc943c17c8c) | [Raw](src/5f0205fa-5c43-424a-af7d-abc943c17c8c/code.power) | [Settings](src/5f0205fa-5c43-424a-af7d-abc943c17c8c/settings.json) | SPK: `Super---5f0205fa_5c43_424a_af7d_abc943c17c8c---Power`
  - **abstract class Versioning** | [Details](src/d9839333-a8f1-4a36-9256-5df4d349b3f6) | [Raw](src/d9839333-a8f1-4a36-9256-5df4d349b3f6/code.power) | [Settings](src/d9839333-a8f1-4a36-9256-5df4d349b3f6/settings.json) | SPK: `Super---d9839333_a8f1_4a36_9256_5df4d349b3f6---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder](#vdm-joomla-componentbuilder)

  - **final class PHPConfigurationChecker** | [Details](src/4b2d6f28-346e-46ec-bf24-d470319cca2d) | [Raw](src/4b2d6f28-346e-46ec-bf24-d470319cca2d/code.power) | [Settings](src/4b2d6f28-346e-46ec-bf24-d470319cca2d/settings.json) | SPK: `Super---4b2d6f28_346e_46ec_bf24_d470319cca2d---Power`
  - **class Table** | [Details](src/bfd1d6d5-56c1-4fe9-9fee-1c5910e1f5d8) | [Raw](src/bfd1d6d5-56c1-4fe9-9fee-1c5910e1f5d8/code.power) | [Settings](src/bfd1d6d5-56c1-4fe9-9fee-1c5910e1f5d8/settings.json) | SPK: `Super---bfd1d6d5_56c1_4fe9_9fee_1c5910e1f5d8---Power`
- **Namespace**: [VDM\Joomla\Data](#vdm-joomla-data)

  - **abstract class Factory** | [Details](src/9d76b8dc-3883-4755-b11c-131d19ca8a53) | [Raw](src/9d76b8dc-3883-4755-b11c-131d19ca8a53/code.power) | [Settings](src/9d76b8dc-3883-4755-b11c-131d19ca8a53/settings.json) | SPK: `Super---9d76b8dc_3883_4755_b11c_131d19ca8a53---Power`
  - **final class Item** | [Details](src/9206082e-a3f7-472e-98b2-de90d06cbdcd) | [Raw](src/9206082e-a3f7-472e-98b2-de90d06cbdcd/code.power) | [Settings](src/9206082e-a3f7-472e-98b2-de90d06cbdcd/settings.json) | SPK: `Super---9206082e_a3f7_472e_98b2_de90d06cbdcd---Power`
  - **final class Items** | [Details](src/21bca8a4-5b28-41c4-843e-8097f0ba7cca) | [Raw](src/21bca8a4-5b28-41c4-843e-8097f0ba7cca/code.power) | [Settings](src/21bca8a4-5b28-41c4-843e-8097f0ba7cca/settings.json) | SPK: `Super---21bca8a4_5b28_41c4_843e_8097f0ba7cca---Power`
  - **final class MultiSubform** | [Details](src/e0198c3f-777a-4a0b-87b7-e6a198afc8f9) | [Raw](src/e0198c3f-777a-4a0b-87b7-e6a198afc8f9/code.power) | [Settings](src/e0198c3f-777a-4a0b-87b7-e6a198afc8f9/settings.json) | SPK: `Super---e0198c3f_777a_4a0b_87b7_e6a198afc8f9---Power`
  - **final class Subform** | [Details](src/85785701-07b2-4f81-bc1e-0f423700c254) | [Raw](src/85785701-07b2-4f81-bc1e-0f423700c254/code.power) | [Settings](src/85785701-07b2-4f81-bc1e-0f423700c254/settings.json) | SPK: `Super---85785701_07b2_4f81_bc1e_0f423700c254---Power`
  - **final class UsersSubform** | [Details](src/46b98346-ec98-42b3-a393-96c7d1282b1c) | [Raw](src/46b98346-ec98-42b3-a393-96c7d1282b1c/code.power) | [Settings](src/46b98346-ec98-42b3-a393-96c7d1282b1c/settings.json) | SPK: `Super---46b98346_ec98_42b3_a393_96c7d1282b1c---Power`
  - **trait Guid** | [Details](src/5acded67-0e3d-4c6b-a6ea-b533b076de0c) | [Raw](src/5acded67-0e3d-4c6b-a6ea-b533b076de0c/code.power) | [Settings](src/5acded67-0e3d-4c6b-a6ea-b533b076de0c/settings.json) | SPK: `Super---5acded67_0e3d_4c6b_a6ea_b533b076de0c---Power`
- **Namespace**: [VDM\Joomla\Database](#vdm-joomla-database)

  - **final class Delete** | [Details](src/92291f1f-f248-4ec0-9f2a-3d47c49eeac1) | [Raw](src/92291f1f-f248-4ec0-9f2a-3d47c49eeac1/code.power) | [Settings](src/92291f1f-f248-4ec0-9f2a-3d47c49eeac1/settings.json) | SPK: `Super---92291f1f_f248_4ec0_9f2a_3d47c49eeac1---Power`
  - **final class Insert** | [Details](src/524eb8f6-38d4-47dc-92ad-98b94e099ac0) | [Raw](src/524eb8f6-38d4-47dc-92ad-98b94e099ac0/code.power) | [Settings](src/524eb8f6-38d4-47dc-92ad-98b94e099ac0/settings.json) | SPK: `Super---524eb8f6_38d4_47dc_92ad_98b94e099ac0---Power`
  - **final class Load** | [Details](src/06f8eada-d59b-441c-b287-0aea1793da5a) | [Raw](src/06f8eada-d59b-441c-b287-0aea1793da5a/code.power) | [Settings](src/06f8eada-d59b-441c-b287-0aea1793da5a/settings.json) | SPK: `Super---06f8eada_d59b_441c_b287_0aea1793da5a---Power`
  - **final class Update** | [Details](src/cce56585-58b0-4f72-a92c-e2635ea52d83) | [Raw](src/cce56585-58b0-4f72-a92c-e2635ea52d83/code.power) | [Settings](src/cce56585-58b0-4f72-a92c-e2635ea52d83/settings.json) | SPK: `Super---cce56585_58b0_4f72_a92c_e2635ea52d83---Power`
  - **trait DefaultTrait** | [Details](src/b8176bdf-5615-4d91-8dfa-990d42f44127) | [Raw](src/b8176bdf-5615-4d91-8dfa-990d42f44127/code.power) | [Settings](src/b8176bdf-5615-4d91-8dfa-990d42f44127/settings.json) | SPK: `Super---b8176bdf_5615_4d91_8dfa_990d42f44127---Power`
  - **trait QuoteTrait** | [Details](src/58ab1a65-9a80-40a3-bb33-c50fbf003b63) | [Raw](src/58ab1a65-9a80-40a3-bb33-c50fbf003b63/code.power) | [Settings](src/58ab1a65-9a80-40a3-bb33-c50fbf003b63/settings.json) | SPK: `Super---58ab1a65_9a80_40a3_bb33_c50fbf003b63---Power`
- **Namespace**: [VDM\Joomla\File](#vdm-joomla-file)

  - **final class Definition** | [Details](src/4d9c5f48-4ed4-485a-9d9a-f31212ddb135) | [Raw](src/4d9c5f48-4ed4-485a-9d9a-f31212ddb135/code.power) | [Settings](src/4d9c5f48-4ed4-485a-9d9a-f31212ddb135/settings.json) | SPK: `Super---4d9c5f48_4ed4_485a_9d9a_f31212ddb135---Power`
  - **class Agent** | [Details](src/d4b415ad-20d7-4b33-a957-88024b56e3f0) | [Raw](src/d4b415ad-20d7-4b33-a957-88024b56e3f0/code.power) | [Settings](src/d4b415ad-20d7-4b33-a957-88024b56e3f0/settings.json) | SPK: `Super---d4b415ad_20d7_4b33_a957_88024b56e3f0---Power`
- **Namespace**: [VDM\Joomla\Import](#vdm-joomla-import)

  - **final class Mapper** | [Details](src/90b48ea8-0930-48d1-869a-bce9c901589c) | [Raw](src/90b48ea8-0930-48d1-869a-bce9c901589c/code.power) | [Settings](src/90b48ea8-0930-48d1-869a-bce9c901589c/settings.json) | SPK: `Super---90b48ea8_0930_48d1_869a_bce9c901589c---Power`
  - **class Data** | [Details](src/05f23281-58e3-482e-be42-2dc1355ef4ea) | [Raw](src/05f23281-58e3-482e-be42-2dc1355ef4ea/code.power) | [Settings](src/05f23281-58e3-482e-be42-2dc1355ef4ea/settings.json) | SPK: `Super---05f23281_58e3_482e_be42_2dc1355ef4ea---Power`
- **Namespace**: [VDM\Joomla\Interfaces](#vdm-joomla-interfaces)

  - **interface Activeregistryinterface** | [Details](src/af0eedbe-603b-4671-8e5a-28165d88254b) | [Raw](src/af0eedbe-603b-4671-8e5a-28165d88254b/code.power) | [Settings](src/af0eedbe-603b-4671-8e5a-28165d88254b/settings.json) | SPK: `Super---af0eedbe_603b_4671_8e5a_28165d88254b---Power`
  - **interface FactoryInterface** | [Details](src/caf33c5d-858c-4f9a-894f-ab302ec5445a) | [Raw](src/caf33c5d-858c-4f9a-894f-ab302ec5445a/code.power) | [Settings](src/caf33c5d-858c-4f9a-894f-ab302ec5445a/settings.json) | SPK: `Super---caf33c5d_858c_4f9a_894f_ab302ec5445a---Power`
  - **interface GrepInterface** | [Details](src/c182506a-ab84-439c-b962-1e606b58d545) | [Raw](src/c182506a-ab84-439c-b962-1e606b58d545/code.power) | [Settings](src/c182506a-ab84-439c-b962-1e606b58d545/settings.json) | SPK: `Super---c182506a_ab84_439c_b962_1e606b58d545---Power`
  - **interface ModelInterface** | [Details](src/8aef58c1-3f70-4bd4-b9e4-3f29fcd41cff) | [Raw](src/8aef58c1-3f70-4bd4-b9e4-3f29fcd41cff/code.power) | [Settings](src/8aef58c1-3f70-4bd4-b9e4-3f29fcd41cff/settings.json) | SPK: `Super---8aef58c1_3f70_4bd4_b9e4_3f29fcd41cff---Power`
  - **interface PHPConfigurationCheckerInterface** | [Details](src/95c02df3-fe0a-405b-b506-b7a5b8605b66) | [Raw](src/95c02df3-fe0a-405b-b506-b7a5b8605b66/code.power) | [Settings](src/95c02df3-fe0a-405b-b506-b7a5b8605b66/settings.json) | SPK: `Super---95c02df3_fe0a_405b_b506_b7a5b8605b66---Power`
  - **interface Registryinterface** | [Details](src/64e291c2-11f1-423d-a44d-837cc12cc017) | [Raw](src/64e291c2-11f1-423d-a44d-837cc12cc017/code.power) | [Settings](src/64e291c2-11f1-423d-a44d-837cc12cc017/settings.json) | SPK: `Super---64e291c2_11f1_423d_a44d_837cc12cc017---Power`
  - **interface SchemaCheckerInterface** | [Details](src/b6e9854c-3672-42ec-8843-26c24b4635bd) | [Raw](src/b6e9854c-3672-42ec-8843-26c24b4635bd/code.power) | [Settings](src/b6e9854c-3672-42ec-8843-26c24b4635bd/settings.json) | SPK: `Super---b6e9854c_3672_42ec_8843_26c24b4635bd---Power`
  - **interface SchemaInterface** | [Details](src/4dd11b9b-3c64-460b-aaa6-62ba467db7aa) | [Raw](src/4dd11b9b-3c64-460b-aaa6-62ba467db7aa/code.power) | [Settings](src/4dd11b9b-3c64-460b-aaa6-62ba467db7aa/settings.json) | SPK: `Super---4dd11b9b_3c64_460b_aaa6_62ba467db7aa---Power`
  - **interface TableInterface** | [Details](src/2da6d6c4-eb29-4d69-8bc2-36d96e916adf) | [Raw](src/2da6d6c4-eb29-4d69-8bc2-36d96e916adf/code.power) | [Settings](src/2da6d6c4-eb29-4d69-8bc2-36d96e916adf/settings.json) | SPK: `Super---2da6d6c4_eb29_4d69_8bc2_36d96e916adf---Power`
  - **interface TableValidatorInterface** | [Details](src/feb3affa-5102-4307-93db-04525f4c66f0) | [Raw](src/feb3affa-5102-4307-93db-04525f4c66f0/code.power) | [Settings](src/feb3affa-5102-4307-93db-04525f4c66f0/settings.json) | SPK: `Super---feb3affa_5102_4307_93db_04525f4c66f0---Power`
- **Namespace**: [VDM\Joomla\Model](#vdm-joomla-model)

  - **final class Load** | [Details](src/bb29a833-73f7-4283-9327-bc7e41f0723b) | [Raw](src/bb29a833-73f7-4283-9327-bc7e41f0723b/code.power) | [Settings](src/bb29a833-73f7-4283-9327-bc7e41f0723b/settings.json) | SPK: `Super---bb29a833_73f7_4283_9327_bc7e41f0723b---Power`
  - **final class Upsert** | [Details](src/7c1fb50f-8fb1-4627-8705-6fedf7182ca5) | [Raw](src/7c1fb50f-8fb1-4627-8705-6fedf7182ca5/code.power) | [Settings](src/7c1fb50f-8fb1-4627-8705-6fedf7182ca5/settings.json) | SPK: `Super---7c1fb50f_8fb1_4627_8705_6fedf7182ca5---Power`
- **Namespace**: [VDM\Joomla\Service](#vdm-joomla-service)

  - **class Data** | [Details](src/a5daf189-3345-4b13-8716-c51f686f545b) | [Raw](src/a5daf189-3345-4b13-8716-c51f686f545b/code.power) | [Settings](src/a5daf189-3345-4b13-8716-c51f686f545b/settings.json) | SPK: `Super---a5daf189_3345_4b13_8716_c51f686f545b---Power`
  - **class Database** | [Details](src/4815e1c7-a433-443d-a112-d1e03d7df84b) | [Raw](src/4815e1c7-a433-443d-a112-d1e03d7df84b/code.power) | [Settings](src/4815e1c7-a433-443d-a112-d1e03d7df84b/settings.json) | SPK: `Super---4815e1c7_a433_443d_a112_d1e03d7df84b---Power`
  - **class Model** | [Details](src/2dcedd6c-c95b-4a37-9cac-95d28faedca3) | [Raw](src/2dcedd6c-c95b-4a37-9cac-95d28faedca3/code.power) | [Settings](src/2dcedd6c-c95b-4a37-9cac-95d28faedca3/settings.json) | SPK: `Super---2dcedd6c_c95b_4a37_9cac_95d28faedca3---Power`
  - **class Table** | [Details](src/19b2ba92-1655-4384-acfb-979c80de8b6d) | [Raw](src/19b2ba92-1655-4384-acfb-979c80de8b6d/code.power) | [Settings](src/19b2ba92-1655-4384-acfb-979c80de8b6d/settings.json) | SPK: `Super---19b2ba92_1655_4384_acfb_979c80de8b6d---Power`
- **Namespace**: [VDM\Joomla\Spreadsheet](#vdm-joomla-spreadsheet)

  - **final class Header** | [Details](src/fd3f322a-082d-4579-93ad-3352c5adfc71) | [Raw](src/fd3f322a-082d-4579-93ad-3352c5adfc71/code.power) | [Settings](src/fd3f322a-082d-4579-93ad-3352c5adfc71/settings.json) | SPK: `Super---fd3f322a_082d_4579_93ad_3352c5adfc71---Power`
- **Namespace**: [VDM\Joomla\Utilities](#vdm-joomla-utilities)

  - **abstract class ArrayHelper** | [Details](src/0a59c65c-9daf-4bc9-baf4-e063ff9e6a8a) | [Raw](src/0a59c65c-9daf-4bc9-baf4-e063ff9e6a8a/code.power) | [Settings](src/0a59c65c-9daf-4bc9-baf4-e063ff9e6a8a/settings.json) | SPK: `Super---0a59c65c_9daf_4bc9_baf4_e063ff9e6a8a---Power`
  - **abstract class Base64Helper** | [Details](src/64a6ff6c-069c-4a11-a76b-db5e36c27690) | [Raw](src/64a6ff6c-069c-4a11-a76b-db5e36c27690/code.power) | [Settings](src/64a6ff6c-069c-4a11-a76b-db5e36c27690/settings.json) | SPK: `Super---64a6ff6c_069c_4a11_a76b_db5e36c27690---Power`
  - **abstract class ClassHelper** | [Details](src/13c2cac1-a70d-42d7-99fc-eb7ac3443069) | [Raw](src/13c2cac1-a70d-42d7-99fc-eb7ac3443069/code.power) | [Settings](src/13c2cac1-a70d-42d7-99fc-eb7ac3443069/settings.json) | SPK: `Super---13c2cac1_a70d_42d7_99fc_eb7ac3443069---Power`
  - **abstract class DateHelper** | [Details](src/993fe913-8e36-4800-a5f7-544aa728ee48) | [Raw](src/993fe913-8e36-4800-a5f7-544aa728ee48/code.power) | [Settings](src/993fe913-8e36-4800-a5f7-544aa728ee48/settings.json) | SPK: `Super---993fe913_8e36_4800_a5f7_544aa728ee48---Power`
  - **abstract class FileHelper** | [Details](src/a223b31e-ea1d-4cdf-92ae-5f9becffaff0) | [Raw](src/a223b31e-ea1d-4cdf-92ae-5f9becffaff0/code.power) | [Settings](src/a223b31e-ea1d-4cdf-92ae-5f9becffaff0/settings.json) | SPK: `Super---a223b31e_ea1d_4cdf_92ae_5f9becffaff0---Power`
  - **abstract class FormHelper** | [Details](src/1198aecf-84c6-45d2-aea8-d531aa4afdfa) | [Raw](src/1198aecf-84c6-45d2-aea8-d531aa4afdfa/code.power) | [Settings](src/1198aecf-84c6-45d2-aea8-d531aa4afdfa/settings.json) | SPK: `Super---1198aecf_84c6_45d2_aea8_d531aa4afdfa---Power`
  - **abstract class GetHelper** | [Details](src/db87c339-5bb6-4291-a7ef-2c48ea1b06bc) | [Raw](src/db87c339-5bb6-4291-a7ef-2c48ea1b06bc/code.power) | [Settings](src/db87c339-5bb6-4291-a7ef-2c48ea1b06bc/settings.json) | SPK: `Super---db87c339_5bb6_4291_a7ef_2c48ea1b06bc---Power`
  - **abstract class GetHelperExtrusion** | [Details](src/cefe4092-a4c2-41a6-a683-bd3ab5419cc6) | [Raw](src/cefe4092-a4c2-41a6-a683-bd3ab5419cc6/code.power) | [Settings](src/cefe4092-a4c2-41a6-a683-bd3ab5419cc6/settings.json) | SPK: `Super---cefe4092_a4c2_41a6_a683_bd3ab5419cc6---Power`
  - **abstract class GuidHelper** | [Details](src/9c513baf-b279-43fd-ae29-a585c8cbc4f0) | [Raw](src/9c513baf-b279-43fd-ae29-a585c8cbc4f0/code.power) | [Settings](src/9c513baf-b279-43fd-ae29-a585c8cbc4f0/settings.json) | SPK: `Super---9c513baf_b279_43fd_ae29_a585c8cbc4f0---Power`
  - **abstract class JsonHelper** | [Details](src/4b225c51-d293-48e4-b3f6-5136cf5c3f18) | [Raw](src/4b225c51-d293-48e4-b3f6-5136cf5c3f18/code.power) | [Settings](src/4b225c51-d293-48e4-b3f6-5136cf5c3f18/settings.json) | SPK: `Super---4b225c51_d293_48e4_b3f6_5136cf5c3f18---Power`
  - **abstract class MathHelper** | [Details](src/152c8793-8b75-4715-996a-257b9f65451c) | [Raw](src/152c8793-8b75-4715-996a-257b9f65451c/code.power) | [Settings](src/152c8793-8b75-4715-996a-257b9f65451c/settings.json) | SPK: `Super---152c8793_8b75_4715_996a_257b9f65451c---Power`
  - **abstract class MimeHelper** | [Details](src/f11dc790-713e-4706-9a85-a318ed3ad56e) | [Raw](src/f11dc790-713e-4706-9a85-a318ed3ad56e/code.power) | [Settings](src/f11dc790-713e-4706-9a85-a318ed3ad56e/settings.json) | SPK: `Super---f11dc790_713e_4706_9a85_a318ed3ad56e---Power`
  - **abstract class ObjectHelper** | [Details](src/91004529-94a9-4590-b842-e7c6b624ecf5) | [Raw](src/91004529-94a9-4590-b842-e7c6b624ecf5/code.power) | [Settings](src/91004529-94a9-4590-b842-e7c6b624ecf5/settings.json) | SPK: `Super---91004529_94a9_4590_b842_e7c6b624ecf5---Power`
  - **abstract class SessionHelper** | [Details](src/47a63728-cd5d-4d53-99cf-2409bd1c744c) | [Raw](src/47a63728-cd5d-4d53-99cf-2409bd1c744c/code.power) | [Settings](src/47a63728-cd5d-4d53-99cf-2409bd1c744c/settings.json) | SPK: `Super---47a63728_cd5d_4d53_99cf_2409bd1c744c---Power`
  - **abstract class StringHelper** | [Details](src/1f28cb53-60d9-4db1-b517-3c7dc6b429ef) | [Raw](src/1f28cb53-60d9-4db1-b517-3c7dc6b429ef/code.power) | [Settings](src/1f28cb53-60d9-4db1-b517-3c7dc6b429ef/settings.json) | SPK: `Super---1f28cb53_60d9_4db1_b517_3c7dc6b429ef---Power`
  - **abstract class UploadHelper** | [Details](src/d7600b43-771a-4747-9f5d-952765721799) | [Raw](src/d7600b43-771a-4747-9f5d-952765721799/code.power) | [Settings](src/d7600b43-771a-4747-9f5d-952765721799/settings.json) | SPK: `Super---d7600b43_771a_4747_9f5d_952765721799---Power`
- **Namespace**: [VDM\Joomla\Abstraction\Console](#vdm-joomla-abstraction-console)

  - **abstract class Import** | [Details](src/85321deb-5c3a-401b-9ce1-039a746add51) | [Raw](src/85321deb-5c3a-401b-9ce1-039a746add51/code.power) | [Settings](src/85321deb-5c3a-401b-9ce1-039a746add51/settings.json) | SPK: `Super---85321deb_5c3a_401b_9ce1_039a746add51---Power`
- **Namespace**: [VDM\Joomla\Abstraction\Remote](#vdm-joomla-abstraction-remote)

  - **abstract class Base** | [Details](src/ee04ea3e-a853-4016-ba10-36e4864ca2b6) | [Raw](src/ee04ea3e-a853-4016-ba10-36e4864ca2b6/code.power) | [Settings](src/ee04ea3e-a853-4016-ba10-36e4864ca2b6/settings.json) | SPK: `Super---ee04ea3e_a853_4016_ba10_36e4864ca2b6---Power`
  - **abstract class Config** | [Details](src/dd43b20b-e89e-48c0-b47e-b02e65b02e3c) | [Raw](src/dd43b20b-e89e-48c0-b47e-b02e65b02e3c/code.power) | [Settings](src/dd43b20b-e89e-48c0-b47e-b02e65b02e3c/settings.json) | SPK: `Super---dd43b20b_e89e_48c0_b47e_b02e65b02e3c---Power`
  - **abstract class Get** | [Details](src/728ee726-3f0f-4762-899d-f8c9430cee58) | [Raw](src/728ee726-3f0f-4762-899d-f8c9430cee58/code.power) | [Settings](src/728ee726-3f0f-4762-899d-f8c9430cee58/settings.json) | SPK: `Super---728ee726_3f0f_4762_899d_f8c9430cee58---Power`
  - **abstract class Set** | [Details](src/eb7d69c2-4ee9-4bd0-aacc-ab51a12be895) | [Raw](src/eb7d69c2-4ee9-4bd0-aacc-ab51a12be895/code.power) | [Settings](src/eb7d69c2-4ee9-4bd0-aacc-ab51a12be895/settings.json) | SPK: `Super---eb7d69c2_4ee9_4bd0_aacc_ab51a12be895---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Abstraction](#vdm-joomla-componentbuilder-abstraction)

  - **abstract class BaseRegistry** | [Details](src/b84e947d-2a13-44f7-ac0f-3902ae55ae0c) | [Raw](src/b84e947d-2a13-44f7-ac0f-3902ae55ae0c/code.power) | [Settings](src/b84e947d-2a13-44f7-ac0f-3902ae55ae0c/settings.json) | SPK: `Super---b84e947d_2a13_44f7_ac0f_3902ae55ae0c---Power`
  - **abstract class ComponentConfig** | [Details](src/9769f3b2-17bf-4f20-b54b-3a4ebe572b36) | [Raw](src/9769f3b2-17bf-4f20-b54b-3a4ebe572b36/code.power) | [Settings](src/9769f3b2-17bf-4f20-b54b-3a4ebe572b36/settings.json) | SPK: `Super---9769f3b2_17bf_4f20_b54b_3a4ebe572b36---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Console](#vdm-joomla-componentbuilder-console)

  - **class ItemImport** | [Details](src/647316a5-eb42-4bec-82dd-ca0dc2861ad3) | [Raw](src/647316a5-eb42-4bec-82dd-ca0dc2861ad3/code.power) | [Settings](src/647316a5-eb42-4bec-82dd-ca0dc2861ad3/settings.json) | SPK: `Super---647316a5_eb42_4bec_82dd_ca0dc2861ad3---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\File](#vdm-joomla-componentbuilder-file)

  - **abstract class Factory** | [Details](src/884eca78-281f-4eab-b962-d97e355af16d) | [Raw](src/884eca78-281f-4eab-b962-d97e355af16d/code.power) | [Settings](src/884eca78-281f-4eab-b962-d97e355af16d/settings.json) | SPK: `Super---884eca78_281f_4eab_b962_d97e355af16d---Power`
  - **final class Definition** | [Details](src/0d159144-b553-4604-8f55-503985e22ec6) | [Raw](src/0d159144-b553-4604-8f55-503985e22ec6/code.power) | [Settings](src/0d159144-b553-4604-8f55-503985e22ec6/settings.json) | SPK: `Super---0d159144_b553_4604_8f55_503985e22ec6---Power`
  - **final class Display** | [Details](src/d46c4667-378b-49e8-9782-ffb28d92415a) | [Raw](src/d46c4667-378b-49e8-9782-ffb28d92415a/code.power) | [Settings](src/d46c4667-378b-49e8-9782-ffb28d92415a/settings.json) | SPK: `Super---d46c4667_378b_49e8_9782_ffb28d92415a---Power`
  - **final class Handler** | [Details](src/4144ad3b-2ad5-401f-af0c-a3d856c1e688) | [Raw](src/4144ad3b-2ad5-401f-af0c-a3d856c1e688/code.power) | [Settings](src/4144ad3b-2ad5-401f-af0c-a3d856c1e688/settings.json) | SPK: `Super---4144ad3b_2ad5_401f_af0c_a3d856c1e688---Power`
  - **final class Image** | [Details](src/fbc235cd-e4cb-45e6-824e-51b3911243cc) | [Raw](src/fbc235cd-e4cb-45e6-824e-51b3911243cc/code.power) | [Settings](src/fbc235cd-e4cb-45e6-824e-51b3911243cc/settings.json) | SPK: `Super---fbc235cd_e4cb_45e6_824e_51b3911243cc---Power`
  - **final class Type** | [Details](src/12a2a8de-a893-4dbb-a53d-b52de4f6cb0e) | [Raw](src/12a2a8de-a893-4dbb-a53d-b52de4f6cb0e/code.power) | [Settings](src/12a2a8de-a893-4dbb-a53d-b52de4f6cb0e/settings.json) | SPK: `Super---12a2a8de_a893_4dbb_a53d_b52de4f6cb0e---Power`
  - **final class TypeDefinition** | [Details](src/8e2b3996-11a1-470d-b2be-2405c62ec192) | [Raw](src/8e2b3996-11a1-470d-b2be-2405c62ec192/code.power) | [Settings](src/8e2b3996-11a1-470d-b2be-2405c62ec192/settings.json) | SPK: `Super---8e2b3996_11a1_470d_b2be_2405c62ec192---Power`
  - **final class TypeDefinition** | [Details](src/ca7e1532-c285-4b4e-9b67-f485cc039bc7) | [Raw](src/ca7e1532-c285-4b4e-9b67-f485cc039bc7/code.power) | [Settings](src/ca7e1532-c285-4b4e-9b67-f485cc039bc7/settings.json) | SPK: `Super---ca7e1532_c285_4b4e_9b67_f485cc039bc7---Power`
  - **class Manager** | [Details](src/67a5e0ca-0ff0-4979-9b41-da0b09988016) | [Raw](src/67a5e0ca-0ff0-4979-9b41-da0b09988016/code.power) | [Settings](src/67a5e0ca-0ff0-4979-9b41-da0b09988016/settings.json) | SPK: `Super---67a5e0ca_0ff0_4979_9b41_da0b09988016---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Import](#vdm-joomla-componentbuilder-import)

  - **abstract class Factory** | [Details](src/ff8d5fdb-2d1f-4178-bd18-a43b8efd1068) | [Raw](src/ff8d5fdb-2d1f-4178-bd18-a43b8efd1068/code.power) | [Settings](src/ff8d5fdb-2d1f-4178-bd18-a43b8efd1068/settings.json) | SPK: `Super---ff8d5fdb_2d1f_4178_bd18_a43b8efd1068---Power`
  - **final class Assessor** | [Details](src/19a66b48-620c-439b-ab8a-3c0d43e040c3) | [Raw](src/19a66b48-620c-439b-ab8a-3c0d43e040c3/code.power) | [Settings](src/19a66b48-620c-439b-ab8a-3c0d43e040c3/settings.json) | SPK: `Super---19a66b48_620c_439b_ab8a_3c0d43e040c3---Power`
  - **final class Item** | [Details](src/68a0f9af-265a-4db1-bae9-a4e4531f94d7) | [Raw](src/68a0f9af-265a-4db1-bae9-a4e4531f94d7/code.power) | [Settings](src/68a0f9af-265a-4db1-bae9-a4e4531f94d7/settings.json) | SPK: `Super---68a0f9af_265a_4db1_bae9_a4e4531f94d7---Power`
  - **final class Row** | [Details](src/afb5b891-7130-422a-b389-1934b0e4fc48) | [Raw](src/afb5b891-7130-422a-b389-1934b0e4fc48/code.power) | [Settings](src/afb5b891-7130-422a-b389-1934b0e4fc48/settings.json) | SPK: `Super---afb5b891_7130_422a_b389_1934b0e4fc48---Power`
  - **final class Status** | [Details](src/d2a859ac-3f2a-4f69-a77f-f118b2e0a459) | [Raw](src/d2a859ac-3f2a-4f69-a77f-f118b2e0a459/code.power) | [Settings](src/d2a859ac-3f2a-4f69-a77f-f118b2e0a459/settings.json) | SPK: `Super---d2a859ac_3f2a_4f69_a77f_f118b2e0a459---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Markdown](#vdm-joomla-componentbuilder-markdown)

  - **final class Html** | [Details](src/0fb58adc-60dd-42f4-9060-b782a5fd0537) | [Raw](src/0fb58adc-60dd-42f4-9060-b782a5fd0537/code.power) | [Settings](src/0fb58adc-60dd-42f4-9060-b782a5fd0537/settings.json) | SPK: `Super---0fb58adc_60dd_42f4_9060_b782a5fd0537---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Service](#vdm-joomla-componentbuilder-service)

  - **class Spreadsheet** | [Details](src/c4a188de-ad78-4a6d-9d5b-01866846d701) | [Raw](src/c4a188de-ad78-4a6d-9d5b-01866846d701/code.power) | [Settings](src/c4a188de-ad78-4a6d-9d5b-01866846d701/settings.json) | SPK: `Super---c4a188de_ad78_4a6d_9d5b_01866846d701---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Spreadsheet](#vdm-joomla-componentbuilder-spreadsheet)

  - **final class Exporter** | [Details](src/e250638e-4a50-41f9-9172-db3e7f174d26) | [Raw](src/e250638e-4a50-41f9-9172-db3e7f174d26/code.power) | [Settings](src/e250638e-4a50-41f9-9172-db3e7f174d26/settings.json) | SPK: `Super---e250638e_4a50_41f9_9172_db3e7f174d26---Power`
  - **final class RowDataArray** | [Details](src/36063502-2115-4c8d-b16a-0c76cc8c1ada) | [Raw](src/36063502-2115-4c8d-b16a-0c76cc8c1ada/code.power) | [Settings](src/36063502-2115-4c8d-b16a-0c76cc8c1ada/settings.json) | SPK: `Super---36063502_2115_4c8d_b16a_0c76cc8c1ada---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Table](#vdm-joomla-componentbuilder-table)

  - **final class Schema** | [Details](src/b3d2ec33-76d4-4c3b-bb2c-86ac14a221ce) | [Raw](src/b3d2ec33-76d4-4c3b-bb2c-86ac14a221ce/code.power) | [Settings](src/b3d2ec33-76d4-4c3b-bb2c-86ac14a221ce/settings.json) | SPK: `Super---b3d2ec33_76d4_4c3b_bb2c_86ac14a221ce---Power`
  - **final class SchemaChecker** | [Details](src/709d7294-9a43-46e2-b64e-d16a16f0eab1) | [Raw](src/709d7294-9a43-46e2-b64e-d16a16f0eab1/code.power) | [Settings](src/709d7294-9a43-46e2-b64e-d16a16f0eab1/settings.json) | SPK: `Super---709d7294_9a43_46e2_b64e_d16a16f0eab1---Power`
  - **final class Validator** | [Details](src/79fd4f39-824d-4ab6-936d-959705ff24ec) | [Raw](src/79fd4f39-824d-4ab6-936d-959705ff24ec/code.power) | [Settings](src/79fd4f39-824d-4ab6-936d-959705ff24ec/settings.json) | SPK: `Super---79fd4f39_824d_4ab6_936d_959705ff24ec---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Utilities](#vdm-joomla-componentbuilder-utilities)

  - **abstract class UserHelper** | [Details](src/7832a726-87b6-4e95-887e-7b725d3fab8f) | [Raw](src/7832a726-87b6-4e95-887e-7b725d3fab8f/code.power) | [Settings](src/7832a726-87b6-4e95-887e-7b725d3fab8f/settings.json) | SPK: `Super---7832a726_87b6_4e95_887e_7b725d3fab8f---Power`
- **Namespace**: [VDM\Joomla\Data\Action](#vdm-joomla-data-action)

  - **class Delete** | [Details](src/3fc72954-a303-4cac-b53c-554be38b85e7) | [Raw](src/3fc72954-a303-4cac-b53c-554be38b85e7/code.power) | [Settings](src/3fc72954-a303-4cac-b53c-554be38b85e7/settings.json) | SPK: `Super---3fc72954_a303_4cac_b53c_554be38b85e7---Power`
  - **class Insert** | [Details](src/a455d916-cfe4-41df-9245-bafb709aacdb) | [Raw](src/a455d916-cfe4-41df-9245-bafb709aacdb/code.power) | [Settings](src/a455d916-cfe4-41df-9245-bafb709aacdb/settings.json) | SPK: `Super---a455d916_cfe4_41df_9245_bafb709aacdb---Power`
  - **class Load** | [Details](src/008d111c-9d43-427c-8dd4-2653e8b74be8) | [Raw](src/008d111c-9d43-427c-8dd4-2653e8b74be8/code.power) | [Settings](src/008d111c-9d43-427c-8dd4-2653e8b74be8/settings.json) | SPK: `Super---008d111c_9d43_427c_8dd4_2653e8b74be8---Power`
  - **class Update** | [Details](src/8f83fb79-f92b-4f1f-952b-325f6c22d11e) | [Raw](src/8f83fb79-f92b-4f1f-952b-325f6c22d11e/code.power) | [Settings](src/8f83fb79-f92b-4f1f-952b-325f6c22d11e/settings.json) | SPK: `Super---8f83fb79_f92b_4f1f_952b_325f6c22d11e---Power`
- **Namespace**: [VDM\Joomla\Data\Migrator](#vdm-joomla-data-migrator)

  - **final class Guid** | [Details](src/0b746305-d34e-4c21-bc20-898c4aeac376) | [Raw](src/0b746305-d34e-4c21-bc20-898c4aeac376/code.power) | [Settings](src/0b746305-d34e-4c21-bc20-898c4aeac376/settings.json) | SPK: `Super---0b746305_d34e_4c21_bc20_898c4aeac376---Power`
- **Namespace**: [VDM\Joomla\Import\Guid](#vdm-joomla-import-guid)

  - **final class JoinTables** | [Details](src/db00768d-c7a6-421d-8f39-577550ddf792) | [Raw](src/db00768d-c7a6-421d-8f39-577550ddf792/code.power) | [Settings](src/db00768d-c7a6-421d-8f39-577550ddf792/settings.json) | SPK: `Super---db00768d_c7a6_421d_8f39_577550ddf792---Power`
  - **final class ParentTable** | [Details](src/cc923dc9-8f5c-46ea-810c-d93df2e5752b) | [Raw](src/cc923dc9-8f5c-46ea-810c-d93df2e5752b/code.power) | [Settings](src/cc923dc9-8f5c-46ea-810c-d93df2e5752b/settings.json) | SPK: `Super---cc923dc9_8f5c_46ea_810c_d93df2e5752b---Power`
- **Namespace**: [VDM\Joomla\Import\Spreadsheet](#vdm-joomla-import-spreadsheet)

  - **final class ChunkReadFilter** | [Details](src/9ae018a5-9064-40ed-ad69-9c1ed2a459f5) | [Raw](src/9ae018a5-9064-40ed-ad69-9c1ed2a459f5/code.power) | [Settings](src/9ae018a5-9064-40ed-ad69-9c1ed2a459f5/settings.json) | SPK: `Super---9ae018a5_9064_40ed_ad69_9c1ed2a459f5---Power`
  - **final class FileReader** | [Details](src/dcb0e061-f337-44f7-87f2-f5c5fb9ce917) | [Raw](src/dcb0e061-f337-44f7-87f2-f5c5fb9ce917/code.power) | [Settings](src/dcb0e061-f337-44f7-87f2-f5c5fb9ce917/settings.json) | SPK: `Super---dcb0e061_f337_44f7_87f2_f5c5fb9ce917---Power`
  - **final class Reader** | [Details](src/c4169332-3914-400e-b861-972b2d465963) | [Raw](src/c4169332-3914-400e-b861-972b2d465963/code.power) | [Settings](src/c4169332-3914-400e-b861-972b2d465963/settings.json) | SPK: `Super---c4169332_3914_400e_b861_972b2d465963---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Data](#vdm-joomla-interfaces-data)

  - **interface DeleteInterface** | [Details](src/d8f9ba53-c490-4e8b-8e9f-6757224e069c) | [Raw](src/d8f9ba53-c490-4e8b-8e9f-6757224e069c/code.power) | [Settings](src/d8f9ba53-c490-4e8b-8e9f-6757224e069c/settings.json) | SPK: `Super---d8f9ba53_c490_4e8b_8e9f_6757224e069c---Power`
  - **interface GuidInterface** | [Details](src/576685fd-263c-46bb-9fdc-1f5eb234cbb6) | [Raw](src/576685fd-263c-46bb-9fdc-1f5eb234cbb6/code.power) | [Settings](src/576685fd-263c-46bb-9fdc-1f5eb234cbb6/settings.json) | SPK: `Super---576685fd_263c_46bb_9fdc_1f5eb234cbb6---Power`
  - **interface InsertInterface** | [Details](src/03bbc8d5-86e8-4d2f-ae5f-0d44a4f7af13) | [Raw](src/03bbc8d5-86e8-4d2f-ae5f-0d44a4f7af13/code.power) | [Settings](src/03bbc8d5-86e8-4d2f-ae5f-0d44a4f7af13/settings.json) | SPK: `Super---03bbc8d5_86e8_4d2f_ae5f_0d44a4f7af13---Power`
  - **interface ItemInterface** | [Details](src/05744dd3-4030-4cf8-8dda-a93ab809b473) | [Raw](src/05744dd3-4030-4cf8-8dda-a93ab809b473/code.power) | [Settings](src/05744dd3-4030-4cf8-8dda-a93ab809b473/settings.json) | SPK: `Super---05744dd3_4030_4cf8_8dda_a93ab809b473---Power`
  - **interface ItemsInterface** | [Details](src/7212e4db-371f-4cfd-8122-32e9bb100d83) | [Raw](src/7212e4db-371f-4cfd-8122-32e9bb100d83/code.power) | [Settings](src/7212e4db-371f-4cfd-8122-32e9bb100d83/settings.json) | SPK: `Super---7212e4db_371f_4cfd_8122_32e9bb100d83---Power`
  - **interface LoadInterface** | [Details](src/c548640c-a461-4424-9ac5-8dfb5ed06d8d) | [Raw](src/c548640c-a461-4424-9ac5-8dfb5ed06d8d/code.power) | [Settings](src/c548640c-a461-4424-9ac5-8dfb5ed06d8d/settings.json) | SPK: `Super---c548640c_a461_4424_9ac5_8dfb5ed06d8d---Power`
  - **interface MultiSubformInterface** | [Details](src/bb30f709-53d2-446a-ab3d-300fe6de0bc8) | [Raw](src/bb30f709-53d2-446a-ab3d-300fe6de0bc8/code.power) | [Settings](src/bb30f709-53d2-446a-ab3d-300fe6de0bc8/settings.json) | SPK: `Super---bb30f709_53d2_446a_ab3d_300fe6de0bc8---Power`
  - **interface SubformInterface** | [Details](src/34959721-415b-4b5e-8002-3d1fc84b3b2b) | [Raw](src/34959721-415b-4b5e-8002-3d1fc84b3b2b/code.power) | [Settings](src/34959721-415b-4b5e-8002-3d1fc84b3b2b/settings.json) | SPK: `Super---34959721_415b_4b5e_8002_3d1fc84b3b2b---Power`
  - **interface UpdateInterface** | [Details](src/68a41264-64c0-441a-a3d8-8a5e557b1883) | [Raw](src/68a41264-64c0-441a-a3d8-8a5e557b1883/code.power) | [Settings](src/68a41264-64c0-441a-a3d8-8a5e557b1883/settings.json) | SPK: `Super---68a41264_64c0_441a_a3d8_8a5e557b1883---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Database](#vdm-joomla-interfaces-database)

  - **interface DefaultInterface** | [Details](src/78931d43-9fb9-4cc1-a2ca-b3e189ef842e) | [Raw](src/78931d43-9fb9-4cc1-a2ca-b3e189ef842e/code.power) | [Settings](src/78931d43-9fb9-4cc1-a2ca-b3e189ef842e/settings.json) | SPK: `Super---78931d43_9fb9_4cc1_a2ca_b3e189ef842e---Power`
  - **interface DeleteInterface** | [Details](src/9c3aa650-e536-4eea-a2d4-73cc3e184aa9) | [Raw](src/9c3aa650-e536-4eea-a2d4-73cc3e184aa9/code.power) | [Settings](src/9c3aa650-e536-4eea-a2d4-73cc3e184aa9/settings.json) | SPK: `Super---9c3aa650_e536_4eea_a2d4_73cc3e184aa9---Power`
  - **interface InsertInterface** | [Details](src/ad12ca1c-d3ce-4e7f-88c5-c6c92bdedc48) | [Raw](src/ad12ca1c-d3ce-4e7f-88c5-c6c92bdedc48/code.power) | [Settings](src/ad12ca1c-d3ce-4e7f-88c5-c6c92bdedc48/settings.json) | SPK: `Super---ad12ca1c_d3ce_4e7f_88c5_c6c92bdedc48---Power`
  - **interface LoadInterface** | [Details](src/2ad31f74-f579-499d-b98b-c4f54fd615dd) | [Raw](src/2ad31f74-f579-499d-b98b-c4f54fd615dd/code.power) | [Settings](src/2ad31f74-f579-499d-b98b-c4f54fd615dd/settings.json) | SPK: `Super---2ad31f74_f579_499d_b98b_c4f54fd615dd---Power`
  - **interface UpdateInterface** | [Details](src/7179fde6-1e51-4b51-8545-7ca18f74a0f4) | [Raw](src/7179fde6-1e51-4b51-8545-7ca18f74a0f4/code.power) | [Settings](src/7179fde6-1e51-4b51-8545-7ca18f74a0f4/settings.json) | SPK: `Super---7179fde6_1e51_4b51_8545_7ca18f74a0f4---Power`
  - **interface VersioningInterface** | [Details](src/ac77cee7-7018-4496-a453-9757623e3849) | [Raw](src/ac77cee7-7018-4496-a453-9757623e3849/code.power) | [Settings](src/ac77cee7-7018-4496-a453-9757623e3849/settings.json) | SPK: `Super---ac77cee7_7018_4496_a453_9757623e3849---Power`
- **Namespace**: [VDM\Joomla\Interfaces\File](#vdm-joomla-interfaces-file)

  - **interface DefinitionInterface** | [Details](src/3b7cd7fc-3e7c-4eaf-b156-7eb3ea744952) | [Raw](src/3b7cd7fc-3e7c-4eaf-b156-7eb3ea744952/code.power) | [Settings](src/3b7cd7fc-3e7c-4eaf-b156-7eb3ea744952/settings.json) | SPK: `Super---3b7cd7fc_3e7c_4eaf_b156_7eb3ea744952---Power`
  - **interface HandlerInterface** | [Details](src/0e23f0ac-8a0a-450e-b40c-912bf331bfae) | [Raw](src/0e23f0ac-8a0a-450e-b40c-912bf331bfae/code.power) | [Settings](src/0e23f0ac-8a0a-450e-b40c-912bf331bfae/settings.json) | SPK: `Super---0e23f0ac_8a0a_450e_b40c_912bf331bfae---Power`
  - **interface PersistentManagerInterface** | [Details](src/082b049c-d8f3-462d-a520-3d312f2eaa31) | [Raw](src/082b049c-d8f3-462d-a520-3d312f2eaa31/code.power) | [Settings](src/082b049c-d8f3-462d-a520-3d312f2eaa31/settings.json) | SPK: `Super---082b049c_d8f3_462d_a520_3d312f2eaa31---Power`
  - **interface TypeDefinitionInterface** | [Details](src/2cd4b4d4-fca3-49a0-8605-a42eee3a5f99) | [Raw](src/2cd4b4d4-fca3-49a0-8605-a42eee3a5f99/code.power) | [Settings](src/2cd4b4d4-fca3-49a0-8605-a42eee3a5f99/settings.json) | SPK: `Super---2cd4b4d4_fca3_49a0_8605_a42eee3a5f99---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Git](#vdm-joomla-interfaces-git)

  - **interface ApiInterface** | [Details](src/17ed2fec-49d6-4731-92c3-f9cd78fb6273) | [Raw](src/17ed2fec-49d6-4731-92c3-f9cd78fb6273/code.power) | [Settings](src/17ed2fec-49d6-4731-92c3-f9cd78fb6273/settings.json) | SPK: `Super---17ed2fec_49d6_4731_92c3_f9cd78fb6273---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Import](#vdm-joomla-interfaces-import)

  - **interface AssessorInterface** | [Details](src/57c00d53-5581-4fd1-b3ea-080422710243) | [Raw](src/57c00d53-5581-4fd1-b3ea-080422710243/code.power) | [Settings](src/57c00d53-5581-4fd1-b3ea-080422710243/settings.json) | SPK: `Super---57c00d53_5581_4fd1_b3ea_080422710243---Power`
  - **interface CliInterface** | [Details](src/0f3f7188-3e0d-4d1a-8dee-7f8026cb65a9) | [Raw](src/0f3f7188-3e0d-4d1a-8dee-7f8026cb65a9/code.power) | [Settings](src/0f3f7188-3e0d-4d1a-8dee-7f8026cb65a9/settings.json) | SPK: `Super---0f3f7188_3e0d_4d1a_8dee_7f8026cb65a9---Power`
  - **interface DatabaseMessageInterface** | [Details](src/23ad6e72-1b82-40fb-836c-50da690bb174) | [Raw](src/23ad6e72-1b82-40fb-836c-50da690bb174/code.power) | [Settings](src/23ad6e72-1b82-40fb-836c-50da690bb174/settings.json) | SPK: `Super---23ad6e72_1b82_40fb_836c_50da690bb174---Power`
  - **interface FileReaderInterface** | [Details](src/61d1146f-2c2e-4e42-8492-d076f945cf35) | [Raw](src/61d1146f-2c2e-4e42-8492-d076f945cf35/code.power) | [Settings](src/61d1146f-2c2e-4e42-8492-d076f945cf35/settings.json) | SPK: `Super---61d1146f_2c2e_4e42_8492_d076f945cf35---Power`
  - **interface ItemInterface** | [Details](src/53f55e5b-63cb-49e7-b1e6-33e7a9f97856) | [Raw](src/53f55e5b-63cb-49e7-b1e6-33e7a9f97856/code.power) | [Settings](src/53f55e5b-63cb-49e7-b1e6-33e7a9f97856/settings.json) | SPK: `Super---53f55e5b_63cb_49e7_b1e6_33e7a9f97856---Power`
  - **interface JoinTablesInterface** | [Details](src/8aad54f1-d86e-48e5-97c4-8a3d6142e4de) | [Raw](src/8aad54f1-d86e-48e5-97c4-8a3d6142e4de/code.power) | [Settings](src/8aad54f1-d86e-48e5-97c4-8a3d6142e4de/settings.json) | SPK: `Super---8aad54f1_d86e_48e5_97c4_8a3d6142e4de---Power`
  - **interface MapperInterface** | [Details](src/250a7272-9ae1-4c63-a058-26bad9ad6f70) | [Raw](src/250a7272-9ae1-4c63-a058-26bad9ad6f70/code.power) | [Settings](src/250a7272-9ae1-4c63-a058-26bad9ad6f70/settings.json) | SPK: `Super---250a7272_9ae1_4c63_a058_26bad9ad6f70---Power`
  - **interface ParentTableInterface** | [Details](src/d0d26434-5917-4564-a366-19fabb30557f) | [Raw](src/d0d26434-5917-4564-a366-19fabb30557f/code.power) | [Settings](src/d0d26434-5917-4564-a366-19fabb30557f/settings.json) | SPK: `Super---d0d26434_5917_4564_a366_19fabb30557f---Power`
  - **interface RowInterface** | [Details](src/3d3ec064-9867-41e6-a48a-964c15d753aa) | [Raw](src/3d3ec064-9867-41e6-a48a-964c15d753aa/code.power) | [Settings](src/3d3ec064-9867-41e6-a48a-964c15d753aa/settings.json) | SPK: `Super---3d3ec064_9867_41e6_a48a_964c15d753aa---Power`
  - **interface SpreadsheetReaderInterface** | [Details](src/4a21d680-1a1c-4fc6-85bc-fa2c6dc41287) | [Raw](src/4a21d680-1a1c-4fc6-85bc-fa2c6dc41287/code.power) | [Settings](src/4a21d680-1a1c-4fc6-85bc-fa2c6dc41287/settings.json) | SPK: `Super---4a21d680_1a1c_4fc6_85bc_fa2c6dc41287---Power`
  - **interface StatusInterface** | [Details](src/0e44d149-4863-47ec-8f0f-6a821ab3e77f) | [Raw](src/0e44d149-4863-47ec-8f0f-6a821ab3e77f/code.power) | [Settings](src/0e44d149-4863-47ec-8f0f-6a821ab3e77f/settings.json) | SPK: `Super---0e44d149_4863_47ec_8f0f_6a821ab3e77f---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Readme](#vdm-joomla-interfaces-readme)

  - **interface ItemInterface** | [Details](src/65a0f81a-14fc-4870-9382-b8d830b19937) | [Raw](src/65a0f81a-14fc-4870-9382-b8d830b19937/code.power) | [Settings](src/65a0f81a-14fc-4870-9382-b8d830b19937/settings.json) | SPK: `Super---65a0f81a_14fc_4870_9382_b8d830b19937---Power`
  - **interface MainInterface** | [Details](src/217416f6-24cf-41c0-b18e-11086111d447) | [Raw](src/217416f6-24cf-41c0-b18e-11086111d447/code.power) | [Settings](src/217416f6-24cf-41c0-b18e-11086111d447/settings.json) | SPK: `Super---217416f6_24cf_41c0_b18e_11086111d447---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Remote](#vdm-joomla-interfaces-remote)

  - **interface BaseInterface** | [Details](src/1d0a2283-2d00-4c98-bf93-19e96c846d62) | [Raw](src/1d0a2283-2d00-4c98-bf93-19e96c846d62/code.power) | [Settings](src/1d0a2283-2d00-4c98-bf93-19e96c846d62/settings.json) | SPK: `Super---1d0a2283_2d00_4c98_bf93_19e96c846d62---Power`
  - **interface ConfigInterface** | [Details](src/61dfeb6a-2e26-44a7-87f8-68b7b09f94a0) | [Raw](src/61dfeb6a-2e26-44a7-87f8-68b7b09f94a0/code.power) | [Settings](src/61dfeb6a-2e26-44a7-87f8-68b7b09f94a0/settings.json) | SPK: `Super---61dfeb6a_2e26_44a7_87f8_68b7b09f94a0---Power`
  - **interface GetInterface** | [Details](src/51de80f2-2868-4c2c-8198-ef79349e9bd7) | [Raw](src/51de80f2-2868-4c2c-8198-ef79349e9bd7/code.power) | [Settings](src/51de80f2-2868-4c2c-8198-ef79349e9bd7/settings.json) | SPK: `Super---51de80f2_2868_4c2c_8198_ef79349e9bd7---Power`
  - **interface SetInterface** | [Details](src/e335dd61-c2f9-4536-8ed9-aec5edee0b26) | [Raw](src/e335dd61-c2f9-4536-8ed9-aec5edee0b26/code.power) | [Settings](src/e335dd61-c2f9-4536-8ed9-aec5edee0b26/settings.json) | SPK: `Super---e335dd61_c2f9_4536_8ed9_aec5edee0b26---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Spreadsheet](#vdm-joomla-interfaces-spreadsheet)

  - **interface RowDataInterface** | [Details](src/9ffc54fa-a71e-412f-bc8b-064fc3b69167) | [Raw](src/9ffc54fa-a71e-412f-bc8b-064fc3b69167/code.power) | [Settings](src/9ffc54fa-a71e-412f-bc8b-064fc3b69167/settings.json) | SPK: `Super---9ffc54fa_a71e_412f_bc8b_064fc3b69167---Power`
- **Namespace**: [VDM\Joomla\Utilities\Component](#vdm-joomla-utilities-component)

  - **abstract class Helper** | [Details](src/640b5352-fb09-425f-a26e-cd44eda03f15) | [Raw](src/640b5352-fb09-425f-a26e-cd44eda03f15/code.power) | [Settings](src/640b5352-fb09-425f-a26e-cd44eda03f15/settings.json) | SPK: `Super---640b5352_fb09_425f_a26e_cd44eda03f15---Power`
- **Namespace**: [VDM\Joomla\Utilities\String](#vdm-joomla-utilities-string)

  - **abstract class ClassfunctionHelper** | [Details](src/30c5b4c2-f75f-4d15-869a-f8bfedd87358) | [Raw](src/30c5b4c2-f75f-4d15-869a-f8bfedd87358/code.power) | [Settings](src/30c5b4c2-f75f-4d15-869a-f8bfedd87358/settings.json) | SPK: `Super---30c5b4c2_f75f_4d15_869a_f8bfedd87358---Power`
  - **abstract class ComponentCodeNameHelper** | [Details](src/491dbe41-f26c-4de9-8a95-fcf87b35b56f) | [Raw](src/491dbe41-f26c-4de9-8a95-fcf87b35b56f/code.power) | [Settings](src/491dbe41-f26c-4de9-8a95-fcf87b35b56f/settings.json) | SPK: `Super---491dbe41_f26c_4de9_8a95_fcf87b35b56f---Power`
  - **abstract class FieldHelper** | [Details](src/9ef0eb24-aae4-4f5a-99af-d724db44808f) | [Raw](src/9ef0eb24-aae4-4f5a-99af-d724db44808f/code.power) | [Settings](src/9ef0eb24-aae4-4f5a-99af-d724db44808f/settings.json) | SPK: `Super---9ef0eb24_aae4_4f5a_99af_d724db44808f---Power`
  - **abstract class NamespaceHelper** | [Details](src/ce8cf834-6bac-44fb-941c-861f7e046cc0) | [Raw](src/ce8cf834-6bac-44fb-941c-861f7e046cc0/code.power) | [Settings](src/ce8cf834-6bac-44fb-941c-861f7e046cc0/settings.json) | SPK: `Super---ce8cf834_6bac_44fb_941c_861f7e046cc0---Power`
  - **abstract class PluginHelper** | [Details](src/3cf76fbf-fd95-4a33-878e-7aff6d36b7f6) | [Raw](src/3cf76fbf-fd95-4a33-878e-7aff6d36b7f6/code.power) | [Settings](src/3cf76fbf-fd95-4a33-878e-7aff6d36b7f6/settings.json) | SPK: `Super---3cf76fbf_fd95_4a33_878e_7aff6d36b7f6---Power`
  - **abstract class TypeHelper** | [Details](src/a8935cbe-7701-40dc-bfd5-675f2d600954) | [Raw](src/a8935cbe-7701-40dc-bfd5-675f2d600954/code.power) | [Settings](src/a8935cbe-7701-40dc-bfd5-675f2d600954/settings.json) | SPK: `Super---a8935cbe_7701_40dc_bfd5_675f2d600954---Power`
- **Namespace**: [VDM\Joomla\Abstraction\Registry\Traits](#vdm-joomla-abstraction-registry-traits)

  - **trait GetString** | [Details](src/59b1a2ea-d77e-4040-ac8c-e65cd8743e9b) | [Raw](src/59b1a2ea-d77e-4040-ac8c-e65cd8743e9b/code.power) | [Settings](src/59b1a2ea-d77e-4040-ac8c-e65cd8743e9b/settings.json) | SPK: `Super---59b1a2ea_d77e_4040_ac8c_e65cd8743e9b---Power`
  - **trait InArray** | [Details](src/215b35ac-1b26-4838-bbcf-d1fdbbd9353f) | [Raw](src/215b35ac-1b26-4838-bbcf-d1fdbbd9353f/code.power) | [Settings](src/215b35ac-1b26-4838-bbcf-d1fdbbd9353f/settings.json) | SPK: `Super---215b35ac_1b26_4838_bbcf_d1fdbbd9353f---Power`
  - **trait IsArray** | [Details](src/c09e8968-c767-4175-bb3d-8432f206a2c7) | [Raw](src/c09e8968-c767-4175-bb3d-8432f206a2c7/code.power) | [Settings](src/c09e8968-c767-4175-bb3d-8432f206a2c7/settings.json) | SPK: `Super---c09e8968_c767_4175_bb3d_8432f206a2c7---Power`
  - **trait IsString** | [Details](src/ff7d0111-8f79-42aa-ac14-b53ba2c49369) | [Raw](src/ff7d0111-8f79-42aa-ac14-b53ba2c49369/code.power) | [Settings](src/ff7d0111-8f79-42aa-ac14-b53ba2c49369/settings.json) | SPK: `Super---ff7d0111_8f79_42aa_ac14_b53ba2c49369---Power`
  - **trait PathCount** | [Details](src/11572d9b-e3d5-4b29-904c-9618d8f2bfd8) | [Raw](src/11572d9b-e3d5-4b29-904c-9618d8f2bfd8/code.power) | [Settings](src/11572d9b-e3d5-4b29-904c-9618d8f2bfd8/settings.json) | SPK: `Super---11572d9b_e3d5_4b29_904c_9618d8f2bfd8---Power`
  - **trait PathToString** | [Details](src/7d494d91-ab60-43cd-aecf-d50e07f7f30e) | [Raw](src/7d494d91-ab60-43cd-aecf-d50e07f7f30e/code.power) | [Settings](src/7d494d91-ab60-43cd-aecf-d50e07f7f30e/settings.json) | SPK: `Super---7d494d91_ab60_43cd_aecf_d50e07f7f30e---Power`
  - **trait VarExport** | [Details](src/52a1d14f-304a-431c-8fa4-411179942db5) | [Raw](src/52a1d14f-304a-431c-8fa4-411179942db5/code.power) | [Settings](src/52a1d14f-304a-431c-8fa4-411179942db5/settings.json) | SPK: `Super---52a1d14f_304a_431c_8fa4_411179942db5---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Data\Migrator](#vdm-joomla-componentbuilder-data-migrator)

  - **abstract class Factory** | [Details](src/f04c13b3-e24e-4cb5-b858-c4fe83c6f991) | [Raw](src/f04c13b3-e24e-4cb5-b858-c4fe83c6f991/code.power) | [Settings](src/f04c13b3-e24e-4cb5-b858-c4fe83c6f991/settings.json) | SPK: `Super---f04c13b3_e24e_4cb5_b858_c4fe83c6f991---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\File\Service](#vdm-joomla-componentbuilder-file-service)

  - **class File** | [Details](src/202ccd9e-dfcf-4cde-a0ce-bde1fd27f088) | [Raw](src/202ccd9e-dfcf-4cde-a0ce-bde1fd27f088/code.power) | [Settings](src/202ccd9e-dfcf-4cde-a0ce-bde1fd27f088/settings.json) | SPK: `Super---202ccd9e_dfcf_4cde_a0ce_bde1fd27f088---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Import\Database](#vdm-joomla-componentbuilder-import-database)

  - **final class Message** | [Details](src/eef6ffc2-2af0-4336-958f-e0b9cf7c4ad0) | [Raw](src/eef6ffc2-2af0-4336-958f-e0b9cf7c4ad0/code.power) | [Settings](src/eef6ffc2-2af0-4336-958f-e0b9cf7c4ad0/settings.json) | SPK: `Super---eef6ffc2_2af0_4336_958f_e0b9cf7c4ad0---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Import\Service](#vdm-joomla-componentbuilder-import-service)

  - **class Import** | [Details](src/21754a8b-2323-4a77-8459-378a74c1ec97) | [Raw](src/21754a8b-2323-4a77-8459-378a74c1ec97/code.power) | [Settings](src/21754a8b-2323-4a77-8459-378a74c1ec97/settings.json) | SPK: `Super---21754a8b_2323_4a77_8459_378a74c1ec97---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Interfaces\File](#vdm-joomla-componentbuilder-interfaces-file)

  - **interface DefinitionInterface** | [Details](src/b62ec888-ce11-45c8-97ff-b4d9bea3d0bc) | [Raw](src/b62ec888-ce11-45c8-97ff-b4d9bea3d0bc/code.power) | [Settings](src/b62ec888-ce11-45c8-97ff-b4d9bea3d0bc/settings.json) | SPK: `Super---b62ec888_ce11_45c8_97ff_b4d9bea3d0bc---Power`
  - **interface TypeDefinitionInterface** | [Details](src/94376132-17b0-4fbd-8fc3-020a63fb15e1) | [Raw](src/94376132-17b0-4fbd-8fc3-020a63fb15e1/code.power) | [Settings](src/94376132-17b0-4fbd-8fc3-020a63fb15e1/settings.json) | SPK: `Super---94376132_17b0_4fbd_8fc3_020a63fb15e1---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Item\Cli](#vdm-joomla-componentbuilder-item-cli)

  - **class Import** | [Details](src/2f14ec19-1b67-44be-8306-2a9e74588464) | [Raw](src/2f14ec19-1b67-44be-8306-2a9e74588464/code.power) | [Settings](src/2f14ec19-1b67-44be-8306-2a9e74588464/settings.json) | SPK: `Super---2f14ec19_1b67_44be_8306_2a9e74588464---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Service\Item](#vdm-joomla-componentbuilder-service-item)

  - **class Import** | [Details](src/b5184f80-613e-46c8-b40a-b60de779bb78) | [Raw](src/b5184f80-613e-46c8-b40a-b60de779bb78/code.power) | [Settings](src/b5184f80-613e-46c8-b40a-b60de779bb78/settings.json) | SPK: `Super---b5184f80_613e_46c8_b40a_b60de779bb78---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Utilities\Exception](#vdm-joomla-componentbuilder-utilities-exception)

  - **class NoUserIdFoundException** | [Details](src/1c10a5f1-204d-4f17-ad9f-0e0684f2030d) | [Raw](src/1c10a5f1-204d-4f17-ad9f-0e0684f2030d/code.power) | [Settings](src/1c10a5f1-204d-4f17-ad9f-0e0684f2030d/settings.json) | SPK: `Super---1c10a5f1_204d_4f17_ad9f_0e0684f2030d---Power`
- **Namespace**: [VDM\Joomla\Componentbuilder\Utilities\Permitted](#vdm-joomla-componentbuilder-utilities-permitted)

  - **abstract class Actions** | [Details](src/7d95ce74-53dc-4672-bd8a-3b71cdacabea) | [Raw](src/7d95ce74-53dc-4672-bd8a-3b71cdacabea/code.power) | [Settings](src/7d95ce74-53dc-4672-bd8a-3b71cdacabea/settings.json) | SPK: `Super---7d95ce74_53dc_4672_bd8a_3b71cdacabea---Power`
- **Namespace**: [VDM\Joomla\Interfaces\Git\Repository](#vdm-joomla-interfaces-git-repository)

  - **interface ContentsInterface** | [Details](src/d1de5d5b-bf29-4031-8094-76c4f6c75900) | [Raw](src/d1de5d5b-bf29-4031-8094-76c4f6c75900/code.power) | [Settings](src/d1de5d5b-bf29-4031-8094-76c4f6c75900/settings.json) | SPK: `Super---d1de5d5b_bf29_4031_8094_76c4f6c75900---Power`
  - **interface TagsInterface** | [Details](src/39cfd409-7329-4393-af05-4b457cb72fac) | [Raw](src/39cfd409-7329-4393-af05-4b457cb72fac/code.power) | [Settings](src/39cfd409-7329-4393-af05-4b457cb72fac/settings.json) | SPK: `Super---39cfd409_7329_4393_af05_4b457cb72fac---Power`
  - **interface WikiInterface** | [Details](src/bd7c1787-f5c1-464e-a009-f39fb5090ee0) | [Raw](src/bd7c1787-f5c1-464e-a009-f39fb5090ee0/code.power) | [Settings](src/bd7c1787-f5c1-464e-a009-f39fb5090ee0/settings.json) | SPK: `Super---bd7c1787_f5c1_464e_a009_f39fb5090ee0---Power`
> remember to replace the `---` with `___` in the SPK to activate that Power in your code

### All used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")